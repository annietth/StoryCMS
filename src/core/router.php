<?php

class Router
{
    private $controller = 'App\Controller\HomeController';
    private $method     = 'index';
    private $params     = [];

    public function __construct()
    {
        $this->parseUri();
    }

    private function parseUri()
    {
        $url = $_GET['url'] ?? '';
        $url = explode('/', trim(strtolower($url), '/'));

        if (!empty($url[0])) {
            
            $controller = $url[0] . 'Controller';
            unset($url[0]);
            $controller = 'App\Controller\\' . $controller;

            if (class_exists($controller)) {
                $this->controller = $controller;
            } else {
                abort('404');
            }
        }

        $class = $this->controller;
        $class = new $class;

        // method 
        if (isset($url[1])) {

            $method = $url[1];
            unset($url[1]);

            if (method_exists($class, $method)) {
                $this->method = $method;
            } else {
                abort();
            }
        }

        // params 
        if (isset($url[2])) {
            $this->params = array_values($url);
        }

        call_user_func_array([$class, $this->method], $this->params);
    }
}
