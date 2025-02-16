<?php

class App {
    
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();
        if(file_exists('./app/controllers/'.$url[1].'.php')) {
            $this->controller = $url[1];
            unset($url[1]);
        }

        require_once './app/controllers/'. $this->controller .'.php';
        $this->controller = new $this->controller;

        if(isset($url[2])) {
            if(method_exists($this->controller, $url[2])) {
                $this->method = $url[2];
                unset($url[2]);

            }
        }
        unset($url[0]);
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if($_SERVER['REQUEST_URI'] != '/') {
            return $url = explode('/' ,filter_var(rtrim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL));
        } 
    }

}
