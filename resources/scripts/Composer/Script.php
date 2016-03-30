<?php

namespace Composer;

class Script
{
    public static function install()
    {
        //chmod('resources/cache', 0777);
        //chmod('resources/logs', 0777);
        chmod('web/assets', 0777);
        chmod('console', 0500);
        exec('php console assetic:dump');
    }

    public static function dumpAssets($type)
    {
        chdir('../assets');
        $assetsFolder = scandir('compile/'+$type);
        $assetsFolder = array_filter($assetsFolder,is_file);

        foreach($assetsFolder as $assetsList) {
            $assetsArray = file($assetsList);
            foreach ($assetsArray as $asset) {
                $fileArr = explode('/', $asset);
                $filename = $fileArr[count($fileArr) - 1];
                $output_file = $filename + '.' + $type;
                exec('cat `cat ../compile/css/'+$assetsList+'` | yuicompressor --type ' + $type +
                    ' -o ' + $output_file);
            }
        }
    }
}
