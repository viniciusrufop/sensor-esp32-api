<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});


/**
 * Uso da api http://localhost:8000/sensor
 */
$router->group(['prefix' => 'v1'], function () use ($router) {
    $router->post('sensor','SensorController@create'); // Salva os dados
    $router->get('sensor','SensorController@get'); // Retorna todos os dados salvos
    
    $router->delete('deleteAll','SensorController@deleteAll'); // Deleta todos os dados da tabela
});
