<?php
spl_autoload_register(function ($className) {
    if(strpos($_SERVER["SERVER_SOFTWARE"], "(Win64)") !== false){
        $namespace = str_replace("\\", "/", __NAMESPACE__);
    }else {
        $namespace = str_replace("\\", "/", __DIR__);
    }
    $className = str_replace("_", "/", $className);
    $class = (empty($namespace) ? "" : $namespace . "/") . "{$className}.php";
    include_once ($class);
});
