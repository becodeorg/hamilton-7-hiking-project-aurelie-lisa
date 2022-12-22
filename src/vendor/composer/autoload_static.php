<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6e311646916ab873bca6f3e5cca8014
{
    public static $classMap = array (
        'Auth' => __DIR__ . '/../..' . '/app/models/AuthModel.php',
        'AuthController' => __DIR__ . '/../..' . '/app/controllers/AuthController.php',
        'ComposerAutoloaderInitd6e311646916ab873bca6f3e5cca8014' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitd6e311646916ab873bca6f3e5cca8014' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Database' => __DIR__ . '/../..' . '/app/models/Database.php',
        'HikesController' => __DIR__ . '/../..' . '/app/controllers/HikeController.php',
        'HikesModel' => __DIR__ . '/../..' . '/app/models/HikesModel.php',
        'HomeController' => __DIR__ . '/../..' . '/app/controllers/HomeController.php',
        'UserProfile' => __DIR__ . '/../..' . '/app/controllers/UserController.php',
        'Users' => __DIR__ . '/../..' . '/app/models/UserModel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd6e311646916ab873bca6f3e5cca8014::$classMap;

        }, null, ClassLoader::class);
    }
}
