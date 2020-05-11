<?php

return [
    '/' => 'Post\PostController@list',
    '/profile' => 'Profile\ProfileController@index',
    '/posts' => 'Post\PostController@list',
    '/login' => 'Auth\LoginController@index',
    '/register' => 'Auth\RegisterController@index',
];
