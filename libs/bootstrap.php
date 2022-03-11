<?php
class Bootstrap {
    public function __construct() {
        $url = substr($_SERVER['REQUEST_URI'], strlen(PRE_URL) + 1);
        if( $url == '/') {
            // Home page
            $home = 'home';
            $files = 'controllers/'.$home.'.php';
            if(file_exists($files)) {
                require $files;
            header('Location: '.URL.$home);
            } else {
                require $files;
                $controller = new Errors("Старницы " .$file. " не существует");
            }
        } else {
            // Other pages
            $page = substr( $url, 1);
            $page = explode('/', $page);
            $file = 'controllers/'.$page[0].'.php';
            if(file_exists($file)) {
                require $file;
            } else {
                require "controllers/errorsPage.php";
                $controller = new errorsPage("Старницы " .$file. " не существует");
                return false;
            }
            $controller = new $page[0];
            $controller->loadModel($page[0]);
            // With 1 arg
            if(isset($page[2])) {
                $method = $page[1];
                $arg = $page[2];
                    if(method_exists($controller, $method ))
                    $controller->$method($arg);
                    else {
                    require "controllers/errorsPage.php";
                    $controller = new errorsPage("Старницы " .$file. " не существует");
                    return false;
                    }
            } else {
            // Without args
                if( isset($page[1])) {
                    $method = $page[1];
                    if(method_exists($controller, $method )) {
                        $controller->$method();
                    }
                    else {
                        require 'controllers/errors.php';
                        $controller = new Errors("Старницы " .$file. " не существует");
                        return false;
                    }
                }
            }
        }
    }
}
?>
