<?php 
namespace App\Utilies;

class Url{

    public static function curent(){
        return (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
    }
 
}