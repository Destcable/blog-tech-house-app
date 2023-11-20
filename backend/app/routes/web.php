<?php

use App\Controllers\PostController;
use App\Controllers\WelcomeController;

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get('/', [WelcomeController::class, 'welcome']);
SimpleRouter::get('/v1/posts', [PostController::class, 'get']);