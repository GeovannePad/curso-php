<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit609baa6c077a74365587c7eeff25a78a
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit609baa6c077a74365587c7eeff25a78a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}