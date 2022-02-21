<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/', function () use ($router) {
    //return \App\Course::All();
    return 'Primeira Api Rest com Lumen - ' . $router->app->version();
});

$router->group(['prefix'=>'courses'], function() use($router){

    $router->get('/','CourseController@index');
    $router->get('/{course}','CourseController@show');

    $router->post('/','CourseController@store');
    $router->put('/{course}','CourseController@update');
    $router->delete('/{course}','CourseController@destroy');

});


