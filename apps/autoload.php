<?php
class Loader {

    public static function loader2($class) {
        $file = str_replace('\\', DIRECTORY_SEPARATOR, ltrim($class,'\\')) . '.php';
        $file = __DIR__.DIRECTORY_SEPARATOR.$file;
        @include $file;
    }

    public static function loader3($class) {
        $paths = array(
            'HomeFramework'    => __DIR__.'/../vendor/homeframework/src',
        );

        foreach ($paths as $module => $path) {
            if (preg_match("/^\\\\?$module/", $class)) {
                $file = str_replace('\\', DIRECTORY_SEPARATOR, ltrim($class,'\\')) . '.php';
                $file = $path.DIRECTORY_SEPARATOR.$file;
                require $file;
            }
        }
    }
}
spl_autoload_register(array('Loader', 'loader2'));
spl_autoload_register(array('Loader', 'loader3'));