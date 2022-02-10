<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e7afe380bc4d3c2b926980f9c0e0bd6
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bronco\\MyFramework\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bronco\\MyFramework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e7afe380bc4d3c2b926980f9c0e0bd6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e7afe380bc4d3c2b926980f9c0e0bd6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e7afe380bc4d3c2b926980f9c0e0bd6::$classMap;

        }, null, ClassLoader::class);
    }
}
