<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit863e17c3b193b2f6299eade528c9b444
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit863e17c3b193b2f6299eade528c9b444::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit863e17c3b193b2f6299eade528c9b444::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
