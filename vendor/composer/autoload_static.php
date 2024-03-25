<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6860e297d1d08c44cd783135aca25b15
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Brianpando\\Plantumlgen\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Brianpando\\Plantumlgen\\' => 
        array (
            0 => __DIR__ . '/..' . '/brianpando/plantumlgen/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6860e297d1d08c44cd783135aca25b15::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6860e297d1d08c44cd783135aca25b15::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6860e297d1d08c44cd783135aca25b15::$classMap;

        }, null, ClassLoader::class);
    }
}
