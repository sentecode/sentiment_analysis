<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2288fa71f29241045d7a6465861e37a7
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sastrawi\\' => 
            array (
                0 => __DIR__ . '/..' . '/sastrawi/sastrawi/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit2288fa71f29241045d7a6465861e37a7::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}