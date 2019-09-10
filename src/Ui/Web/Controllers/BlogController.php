<?php

namespace Blog\Ui\Web\Controllers;

use Skeleton\Parents\Routing\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog::index');
    }
}
