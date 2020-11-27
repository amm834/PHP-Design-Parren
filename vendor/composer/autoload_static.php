<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25d1fc74a3f76325eb2607f0e819235b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25d1fc74a3f76325eb2607f0e819235b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25d1fc74a3f76325eb2607f0e819235b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit25d1fc74a3f76325eb2607f0e819235b::$classMap;

        }, null, ClassLoader::class);
    }
}
