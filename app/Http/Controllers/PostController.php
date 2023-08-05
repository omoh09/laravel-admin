<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {

    }

    public function create()
    {
        return "create post page is here";
    }

    public function edit($id)
    {
        return "Edit post with id, " . $id;
    }
}
