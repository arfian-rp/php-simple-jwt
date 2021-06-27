<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ce3a77935adfc79c0ae6491678a3303
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'A' => 
        array (
            'Arfian\\PhpBelajarJwt\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Arfian\\PhpBelajarJwt\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ce3a77935adfc79c0ae6491678a3303::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ce3a77935adfc79c0ae6491678a3303::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2ce3a77935adfc79c0ae6491678a3303::$classMap;

        }, null, ClassLoader::class);
    }
}