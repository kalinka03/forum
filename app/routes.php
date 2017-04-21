<?php

$_routes = [

    '/' => ['handler' => ['MainController','index']],

    '/section/([a-z]*)/([0-9]+)' => ['handler' => ['ForumController','showTopic']],
    '/section/([a-z]*)' => ['handler' => ['ForumController','showSection']],
 '/registration' => ['handler' => ['AuthController','registration']],
'/login' => ['handler' => ['AuthController','login']],
'logout' => ['handler' => ['AuthController','logout']],
    '/search' => ['handler' => ['SearchController','search']],
];