<?php

use Doctrine\DBAL\DriverManager;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;

$console = new Application('Silex - Pumped distribution', '0.1');
$app['debug'] = false;
//$app->boot();

$console
    ->register('assetic:dump')
    ->setDescription('Dumps all assets to the filesystem')
    ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
        if (!$app['assetic.enabled']) {
            return false;
        }

        $dumper = $app['assetic.dumper'];
        if (isset($app['twig'])) {
            $dumper->addTwigAssets();
        }
        $dumper->dumpAssets();
        $output->writeln("\n<br/><info>Dump finished</info>");
    })
;

$console
    ->register('assets')
    ->setDescription('Dumps all assets to the filesystem')
    ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
        include_once(DOCUMENT_ROOT. '/resources/scripts/Assets.php');
        Assets::dump('css');
        Assets::dump('js');
        Assets::dumpLocales();
        Assets::incrementVersion('js');
        Assets::incrementVersion('css');
        $output->writeln("\n\n<info>ALL Dumps finished</info>");
    })
;

$console
    ->register('assets:js')
    ->setDescription('Dumps all assets to the filesystem')
    ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
        include_once(DOCUMENT_ROOT. '/resources/scripts/Assets.php');
        Assets::dump('js');
        Assets::incrementVersion('js');
        $output->writeln("\n<info>Javascript Dump finished</info>");
    })
;

$console
    ->register('assets:css')
    ->setDescription('Dumps all assets to the filesystem')
    ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
        include_once(DOCUMENT_ROOT. '/resources/scripts/Assets.php');
        Assets::dump('css');
        Assets::incrementVersion('css');
        $output->writeln("\n<info>CSS Dump finished</info>");
    })
;

$console
    ->register('assets:yml')
    ->setDescription('Dumps all assets to the filesystem')
    ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
        include_once(DOCUMENT_ROOT. '/resources/scripts/Assets.php');
        Assets::dumpLocales();
        $output->writeln("\n<info>YML Dump finished</info>");
    })
;


if (isset($app['cache.path'])) {
    $console
        ->register('cache:clear')
        ->setDescription('Clears the cache')
        ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {

            $cacheDir = $app['cache.path'];
            $finder = Finder::create()->in($cacheDir)->notName('.gitkeep');

            $filesystem = new Filesystem();
            $filesystem->remove($finder);

            $output->writeln(sprintf("%s \n<br/><info>success</info>", 'cache:clear'));
    });
}

$console
    ->register('doctrine:schema:show')
    ->setDescription('Output schema declaration')
    ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
        $schema = require __DIR__ . '/db/schema.php';

        foreach ($schema->toSql($app['db']->getDatabasePlatform()) as $sql) {
            $output->writeln($sql.';');
        }
    })
;

$console
    ->register('doctrine:schema:load')
    ->setDescription('Load schema')
    ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
        $schema = require __DIR__ . '/db/schema.php';

        foreach ($schema->toSql($app['db']->getDatabasePlatform()) as $sql) {
            $app['db']->exec($sql.';');
        }
    })
;

$console
    ->register('doctrine:database:drop')
    ->setName('doctrine:database:drop')
    ->setDescription('Drops the configured databases')
    ->addOption('connection', null, InputOption::VALUE_OPTIONAL, 'The connection to use for this command')
    ->addOption('force', null, InputOption::VALUE_NONE, 'Set this parameter to execute this action')
    ->setHelp(<<<EOT
The <br/><info>doctrine:database:drop</info> command drops the default connections
database:

<br/><info>php app/console doctrine:database:drop</info>

The --force parameter has to be used to actually drop the database.

You can also optionally specify the name of a connection to drop the database
for:

<br/><info>php app/console doctrine:database:drop --connection=default</info>

<error>Be careful: All data in a given database will be lost when executing
this command.</error>
EOT
        )
        ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
        $connection = $app['db'];

        $params = $connection->getParams();

        $name = isset($params['path']) ? $params['path'] : (isset($params['dbname']) ? $params['dbname'] : false);

        if (!$name) {
            throw new \InvalidArgumentException("Connection does not contain a 'path' or 'dbname' parameter and cannot be dropped.");
        }

        if ($input->getOption('force')) {
            // Only quote if we don't have a path
            if (!isset($params['path'])) {
                $name = $connection->getDatabasePlatform()->quoteSingleIdentifier($name);
            }

            try {
                $connection->getSchemaManager()->dropDatabase($name);
                $output->writeln(sprintf('<br/><info>Dropped database for connection named <comment>%s</comment></info>', $name));
            } catch (\Exception $e) {
                $output->writeln(sprintf('<error>Could not drop database for connection named <comment>%s</comment></error>', $name));
                $output->writeln(sprintf('<error>%s</error>', $e->getMessage()));

                return 1;
            }
        } else {
            $output->writeln('<error>ATTENTION:</error> This operation should not be executed in a production environment.');
            $output->writeln('');
            $output->writeln(sprintf('<br/><info>Would drop the database named <comment>%s</comment>.</info>', $name));
            $output->writeln('Please run the operation with --force to execute');
            $output->writeln('<error>All data will be lost!</error>');

            return 2;
        }
    })
;
$console
    ->register('doctrine:database:create')
    ->setDescription('Creates the configured databases')
    ->addOption('connection', null, InputOption::VALUE_OPTIONAL, 'The connection to use for this command')
    ->setHelp(<<<EOT
The <br/><info>doctrine:database:create</info> command creates the default
connections database:

<br/><info>php app/console doctrine:database:create</info>

You can also optionally specify the name of a connection to create the
database for:

<br/><info>php app/console doctrine:database:create --connection=default</info>
EOT
    )
    ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
        $connection = $app['db'];

        $params = $connection->getParams();
        $name = isset($params['path']) ? $params['path'] : $params['dbname'];

        unset($params['dbname']);

        $tmpConnection = DriverManager::getConnection($params);

        // Only quote if we don't have a path
        if (!isset($params['path'])) {
            $name = $tmpConnection->getDatabasePlatform()->quoteSingleIdentifier($name);
        }

        $error = false;
        try {
            $tmpConnection->getSchemaManager()->createDatabase($name);
            $output->writeln(sprintf('<br/><info>Created database for connection named <comment>%s</comment></info>', $name));
        } catch (\Exception $e) {
            $output->writeln(sprintf('<error>Could not create database for connection named <comment>%s</comment></error>', $name));
            $output->writeln(sprintf('<error>%s</error>', $e->getMessage()));
            $error = true;
        }

        $tmpConnection->close();

        return $error ? 1 : 0;
    })
;

return $console;
