<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Utils\Response;

class PostController
{
    public function get()
    {
        return Response::success(PostModel::get());
    }
    public function create()
    {
    }
}
