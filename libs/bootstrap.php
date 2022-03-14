<?php
class Router
{
    private static $routes = array();

    private function __construct() {}
    private function __clone() {}

    public static function route($pattern, $callback)
    {
        $pattern = '/^' . str_replace('/', '\/', $pattern) . '$/';
        self::$routes[$pattern] = $callback;
    }

    public static function execute($url)
    {
        foreach (self::$routes as $pattern => $callback)
        {
            if (preg_match($pattern, $url, $params))
            {
                array_shift($params);
                return call_user_func_array($callback, array_values($params));
            }
        }
    }

    public static function errorPage()
    {
        require "./controllers/errorsPage.php";
        $controller = new errorsPage("Страницы не существует");
    }

    public static function routeController($url)
    {
        $file = './controllers/'.$url.'.php';
        if(file_exists($file)) {
            require $file;
        } else {
            Router::errorPage();
            return NULL;
        }
        $controller = new $url;
        $controller->loadModel($url);
        return $controller;
    }

    public static function routeMethod($controller_name, $method, $arg = NULL)
    {
        $controller = Router::routeController($controller_name);
        if (isset($controller) && !$controller->call($method, $arg))
        {
            Router::errorPage();
        }
    }
}

Router::route('/', function(){
    $home = 'home';
    $files = 'controllers/'.$home.'.php';
    if(file_exists($files))
    {
        require $files;
        header('Location: '.URL.$home);
    }
});
Router::route('/(\w+)', function($controller_name)
{
    Router::routeController($controller_name);
});
Router::route('/(\w+)/(\w+)', function($controller_name, $method) {
    Router::routeMethod($controller_name, $method);
});
Router::route('/(\w+)/(\w+)/(\d+)', function($controller_name, $method, $arg){
    Router::routeMethod($controller_name, $method, $arg);
});

class Bootstrap {
    public function __construct() {
        $url = substr($_SERVER['REQUEST_URI'], strlen(PRE_URL) + 1);
        Router::execute($url);
    }
}
?>
