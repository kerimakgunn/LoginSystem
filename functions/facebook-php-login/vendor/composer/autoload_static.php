<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita69d5c3348649eadda86d8b7d05c3a5f
{
    public static $files = array (
        '7e702cccdb9dd904f2ccf22e5f37abae' => __DIR__ . '/..' . '/facebook/php-sdk-v4/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/php-sdk-v4/src/Facebook',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita69d5c3348649eadda86d8b7d05c3a5f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita69d5c3348649eadda86d8b7d05c3a5f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
