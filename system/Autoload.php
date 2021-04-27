<?php
//REGISTER classes from 'system' and 'models' folder
spl_autoload_register(function ($class_name) {

    $classPaths = [
        '/system/',
        '/models/'
    ];
    foreach ($classPaths as $path) {
        $path = ROOT . $path . $class_name . '.php';
        //check if path exist
        if (is_file($path)) {
            include_once $path;
        }
    }
});
