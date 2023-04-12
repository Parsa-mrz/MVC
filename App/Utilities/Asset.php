<?php 
namespace App\Utilies;

class Asset{
    public static function get(string $route){
        return $_ENV['HOST'] . 'assets/' . $route;
    }
    public static function css(string $route){
        return $_ENV['HOST'] . 'assets/css/' . $route;
    }
    public static function js(string $route){
        return $_ENV['HOST'] . 'assets/js/' . $route;
    }
    public static function img(string $route){
        return $_ENV['HOST'] . 'assets/img/' . $route;
    }
    public static function fonts(string $route){
        return $_ENV['HOST'] . 'assets/fonts/' . $route;
    }
}