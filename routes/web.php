<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('recipes', [
    'as' => 'recipes', 'uses' => 'RecipesController@list',
]);

$router->get('recipe/{id}', [
    'as' => 'recipe', 'uses' => 'RecipesController@show',
]);
