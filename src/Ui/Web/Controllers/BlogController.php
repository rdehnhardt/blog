<?php

namespace Blog\Ui\Web\Controllers;

use Blog\Ui\Web\Requests\Post as PostRequest;
use Skeleton\Parents\Routing\Controller;

class BlogController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('blog::index');
    }

    /**
     * @param PostRequest $request
     * @return array
     */
    public function store(PostRequest $request)
    {
        return ['status' => 'online'];
    }
}
