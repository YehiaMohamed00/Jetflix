<?php

namespace app\controllers;
use app\core\Application;
use app\core\Router;

abstract class RootController{
    protected Application $app; 
    protected Router $router;
    private array $sessionTimeTable;

    public function __construct(Application &$app){
        /**
         * @param Application  $app - app instance passed by reference
         */
        $this->app = $app;
        $this->router = $app->router;
    }

    public function render(string $view, array $params=[]){
        /**
         * renders the target view and passes the params as variables to be
         * used in the target view
         * 
         * @param string $view - string of the view in the views dir
         * @param array $params - parameters key value pairs
         */
        return $this->router->renderView($view, $params);
    }

    public function get(string $uri, callable $callback){
        /**
         * Builds a get request to the target URI and the callback function 
         * to be executed
         * @param string $uri - URI to handle
         * @param callable $callback - the callback (handler) function
         */
        $this->router->get($uri, $callback);
    }

    public function post(string $uri, callable $callback){
        /**
         * Builds a post request to the target URI and the callback function 
         * to be executed
         * @param string $uri - URI to handle
         * @param callable $callback - the callback (handler) function
         */
        $this->router->post($uri, $callback);
    }

    public function getRequestBody(){
        /**
         * returns the body of the request
         * @return array requestBody
         */
        return $this->app->request->getBody();
    }

    public function checkIfLoggedIn(){
        return !($this->app->cookie->getCookie('login')===null);
    }

    public function setLoginStatusInSession($value, $ttl){
        $this->app->cookie->setCookie('login', $value, time()+60*$ttl);
    }

    public function redirect($where){
        $port = $this->app->port;
        return header("Location:http://localhost:$port$where");
    }
    
    /**
     * Abstruct function publicateRoutes must be implemented in all
     * inherited classes.
     */
    public abstract function publishRoutes();
}