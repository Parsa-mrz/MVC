<?php 
use App\Core\Routing\Route;

Route::add(['get'],'/a',function(){
    echo "welcome a";
});

Route::add(['get'],'/b',function(){
    echo "welcome b";
});

Route::add(['get'],'/c',function(){
    echo "welcome c";
});