<?php
/**
*    class Request
*/

namespace app\core;

class Request{
    public function getPath(){
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if ($position === false){
            return $path;
        }
        $path = substr($path, 0, $position);
        return $path;
    }

    public function getMethod(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function isPost(){
        return $this->getMethod() ==='post';
    }

    public function isGet(){
        return $this->getMethod() ==='get';
    }

    public function getBody(){
        /**
         * returns the request body
         * @return array requestBody
         */
        $body = [];
        $method = $this->getMethod()==='get'? $_GET:$_POST;
        $filterType = $this->getMethod()==='get'? INPUT_GET:INPUT_POST;

        foreach($method as $key=>$value){
            // sanitize the data
            $body[$key] = filter_input($filterType, $key, FILTER_SANITIZE_SPECIAL_CHARS);
        }

        return $body;
    }
}