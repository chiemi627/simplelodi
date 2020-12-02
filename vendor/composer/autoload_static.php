<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b5fca336a42cdbf1a8a30179e7ac504
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'ML\\JsonLD\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ML\\JsonLD\\' => 
        array (
            0 => __DIR__ . '/..' . '/ml/json-ld',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'ML\\IRI' => 
            array (
                0 => __DIR__ . '/..' . '/ml/iri',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b5fca336a42cdbf1a8a30179e7ac504::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b5fca336a42cdbf1a8a30179e7ac504::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0b5fca336a42cdbf1a8a30179e7ac504::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0b5fca336a42cdbf1a8a30179e7ac504::$classMap;

        }, null, ClassLoader::class);
    }
}
