<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit712e69c8b4966d27f53d3463b66a6b3f
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
            $loader->prefixesPsr0 = ComposerStaticInit712e69c8b4966d27f53d3463b66a6b3f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
