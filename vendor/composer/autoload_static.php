<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit953eacfb2ce4d67ad06e2191d74a37a2
{
    public static $files = array (
        'ffa591c8196e90052b958fedd20eb1e2' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit953eacfb2ce4d67ad06e2191d74a37a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit953eacfb2ce4d67ad06e2191d74a37a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit953eacfb2ce4d67ad06e2191d74a37a2::$classMap;

        }, null, ClassLoader::class);
    }
}
