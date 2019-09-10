<?php

namespace Blog\Ui\Web\Routes;

use Illuminate\Contracts\Routing\Registrar as Router;
use Skeleton\Parents\Routing\HttpRouter;

class Blog extends HttpRouter
{
    /**
     * @param Router $router
     * @return mixed
     */
    public function map(Router $router)
    {
        $router->get('blog', 'BlogController@index');
    }
}