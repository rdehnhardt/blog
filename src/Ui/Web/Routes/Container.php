<?php

namespace Skeleton\Container\Ui\Web\Routes;

use Illuminate\Contracts\Routing\Registrar;

class Container
{
    /**
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        $router->get('container', 'ContainerController@index');
    }
}