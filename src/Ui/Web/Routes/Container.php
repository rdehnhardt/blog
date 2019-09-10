<?php

namespace Blog\Ui\Web\Routes;

use Illuminate\Contracts\Routing\Registrar;

class Container
{
    /**
     * @param Registrar $router
     */
    public function map(Registrar $router)
    {
        $router->get('container', 'ContainerController@index');
    }
}