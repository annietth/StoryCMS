<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit183683a510f31530fd685763fbf4b7ff
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit183683a510f31530fd685763fbf4b7ff::$classMap;

        }, null, ClassLoader::class);
    }
}