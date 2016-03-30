#!/usr/bin/php
<?php

class Assets
{



    public static function dump($type, $debug=false)
    {
        $assetsDir = __DIR__ . '/../../web';
        $srcDir = $assetsDir . '/compile/' . $type;
        $filesDir = $assetsDir . '/' . $type;


        $assetsFolder = scandir($srcDir);

        $assetsFolder = array_filter($assetsFolder, function ($item) use ($srcDir) {
            return is_file($srcDir . '/' . $item);
        });

        print_r($assetsFolder);
        chdir($filesDir);
        foreach ($assetsFolder as $assetsList) {
            $assetsArray = file($srcDir . '/' . $assetsList);
            echo 'Source : ' . $assetsList . '  =>  ';
            $output_file = $assetsList . '.' . $type;
            print_r($assetsArray);
            //print 'cat `cat ' . $srcDir . '/' . $assetsList . '` | yuicompressor -v --type ' . $type .
            //    ' -o ' . $output_file . ' && cp ' . $output_file . ' ../../../' . $type;

            echo exec('rm -Rf $output_file');
            if ($type === 'css') {
                echo exec('cat `cat ' . $srcDir . '/' . $assetsList . '` | cleancss ' .
                    ' -o ' . $output_file );
            } else {
                if($debug){
                    echo '/tmp/'. $assetsList.'-tmpoutput.js';
                    echo exec('cat `cat ' . $srcDir . '/' . $assetsList . '` > /tmp/'. $assetsList.'-tmpoutput.js' );
                }
                echo exec('cat `cat ' . $srcDir . '/' . $assetsList . '` | uglifyjs --stats --lint --screw-ie8 -c drop_console=true,evaluate,if_return,hoist_funs=false,hoist_vars=false,warnings -v --type ' . $type .
                    ' -o ' . $output_file );

            }
        }

    }

    public static function dumpLocales(){

        chdir(__DIR__ . '/../locales/');
        echo exec('yaml2json . -s');
        echo exec('mv *.json ../../web/data/locales/');

        $files = glob(__DIR__ . '/../../web/data/locales/*.json');

        foreach ($files as $file){
            exec("echo 'dumping $file'");
            $file2 = str_replace('.json', '.js', $file);
            print_r($file2);
            file_put_contents($file2, 'Lang.dict = ' . file_get_contents($file) . ';');
        }

    }

    public static function incrementVersion($type)
    {
        $assetsDir = __DIR__ . '/../../web';
        $version = file_get_contents($assetsDir . '/'.$type.'.version.txt');
        $version = (intval($version));
        $version++;
        print 'Assets version ' . $version;
        file_put_contents($assetsDir .  '/'.$type.'.version.txt', $version);
    }


}

if(isset($argv)){
if (count($argv) > 1) {
    $debug = isset($argv[2])? true : false;
    switch ($argv[1]) {
        case 'js':
            Assets::dump('js', $debug);
            Assets::incrementVersion('js');
            break;
        case 'css':
            Assets::dump('css', $debug);
            Assets::incrementVersion('css');
            break;
        case 'yml':
            Assets::dumpLocales();
            break;
        default:
            print '!!!!! asset type not recognized. Use css or js';
    }
} else {
    Assets::dump('css');
    Assets::dump('js');
    Assets::dumpLocales();
    Assets::incrementVersion('js');
    Assets::incrementVersion('css');
}

}
