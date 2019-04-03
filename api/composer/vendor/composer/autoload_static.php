<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85f85c4ea1a5b26a56f021851f34ddc2
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\' => 18,
            'Symfony\\Component\\Console\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/contracts',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPDocsMD' => 
            array (
                0 => __DIR__ . '/..' . '/victorjonsson/markdowndocs/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85f85c4ea1a5b26a56f021851f34ddc2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85f85c4ea1a5b26a56f021851f34ddc2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit85f85c4ea1a5b26a56f021851f34ddc2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
