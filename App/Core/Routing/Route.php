<?php 

namespace App\Core\Routing;

class Route{
    private static $route = [];

    public static function add($methods,$uri,$action = null) {

        $methods = is_array($methods) ? $methods : array($methods);
        self::$route[] = ['methods' => $methods, 'uri' => $uri, 'action' => $action];

    }

    public static function get($uri,$action = null){
        self::add('get',$uri,$action = null);
    }
    public static function post($uri,$action = null){
        self::add('post',$uri,$action = null);
    }
    public static function put($uri,$action = null){
        self::put('get',$uri,$action = null);
    }
    public static function delete($uri,$action = null){
        self::put('delete',$uri,$action = null);
    }

    public static function routes(){
        return self::$route;
    }
}