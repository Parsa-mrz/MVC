<?php 
use App\Core\Routing\Route;

Route::get('/b',function(){
    echo "welcome b";
});

Route::get('/a',function(){
    echo "welcome a";
});
Route::get('/','HomeController@index');
