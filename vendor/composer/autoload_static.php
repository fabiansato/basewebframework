<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b39d33357e00dc5143da5c59b2bf4e4
{
    public static $files = array (
        '830dd145904f7ea08cb30ea3847511cf' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Text\\' => 5,
        ),
        'M' => 
        array (
            'MyApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Text\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'MyApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Text\\Format' => __DIR__ . '/../..' . '/src/Format.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b39d33357e00dc5143da5c59b2bf4e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b39d33357e00dc5143da5c59b2bf4e4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3b39d33357e00dc5143da5c59b2bf4e4::$classMap;

        }, null, ClassLoader::class);
    }
}
