<?php

namespace Skeleton\Container\Ui\Web\Controllers;

use App\Http\Controllers\Controller;

class ContainerController extends Controller
{
    public function index()
    {
        return view('container::index');
    }
}
