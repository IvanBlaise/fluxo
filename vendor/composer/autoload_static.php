<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4824fa1e00958824471ba01e19153077
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fsolutions\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fsolutions\\' => 
        array (
            0 => __DIR__ . '/..' . '/br/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4824fa1e00958824471ba01e19153077::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4824fa1e00958824471ba01e19153077::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4824fa1e00958824471ba01e19153077::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
