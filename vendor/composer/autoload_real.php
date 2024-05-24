<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitddc3491a68fd14a1a8be75d1ea62c909
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitddc3491a68fd14a1a8be75d1ea62c909', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitddc3491a68fd14a1a8be75d1ea62c909', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitddc3491a68fd14a1a8be75d1ea62c909::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
