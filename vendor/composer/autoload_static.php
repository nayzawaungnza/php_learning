<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite58dc49370c3214f2960e161df517e8d
{
    public static $classMap = array (
        'AuthMiddleware' => __DIR__ . '/../..' . '/auth/AuthMiddleware.php',
        'ComposerAutoloaderInite58dc49370c3214f2960e161df517e8d' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInite58dc49370c3214f2960e161df517e8d' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'controllers\\AuthController' => __DIR__ . '/../..' . '/controllers/AuthController.php',
        'controllers\\PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'controllers\\UserController' => __DIR__ . '/../..' . '/controllers/UserController.php',
        'core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'core\\Redirect' => __DIR__ . '/../..' . '/core/Redirect.php',
        'core\\Session' => __DIR__ . '/../..' . '/core/Session.php',
        'core\\Validator' => __DIR__ . '/../..' . '/core/Validator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite58dc49370c3214f2960e161df517e8d::$classMap;

        }, null, ClassLoader::class);
    }
}
