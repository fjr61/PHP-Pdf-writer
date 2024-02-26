<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93f8d5e1b65ef084c3a5dae68f445e31
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'setasign\\Fpdi\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'setasign\\Fpdi\\' => 
        array (
            0 => __DIR__ . '/..' . '/setasign/fpdi/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit93f8d5e1b65ef084c3a5dae68f445e31::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93f8d5e1b65ef084c3a5dae68f445e31::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit93f8d5e1b65ef084c3a5dae68f445e31::$classMap;

        }, null, ClassLoader::class);
    }
}