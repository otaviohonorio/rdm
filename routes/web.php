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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api'], function () use ($router) {

  $router->get('mapped',  ['uses' => 'HostMappedController@showAllHostMapped']);
  $router->get('mapped/{id}', ['uses' => 'HostMappedController@showOneHostMapped']);
  $router->post('mapped', ['uses' => 'HostMappedController@create']);
  $router->delete('mapped/{id}', ['uses' => 'HostMappedController@delete']);
  $router->put('mapped/{id}', ['uses' => 'HostMappedController@update']);

  $router->get('application',  ['uses' => 'ApplicationController@showAllApplication']);
  $router->get('application/{id}', ['uses' => 'ApplicationController@showOneApplication']);
  $router->post('application', ['uses' => 'ApplicationController@create']);
  $router->delete('application/{id}', ['uses' => 'ApplicationController@delete']);
  $router->put('application/{id}', ['uses' => 'ApplicationController@update']);

});
