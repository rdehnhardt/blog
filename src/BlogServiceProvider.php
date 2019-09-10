<?php

namespace Blog;

use Porto\Support\PortoServiceProvider;

class BlogServiceProvider extends PortoServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->container('blog', __DIR__, __NAMESPACE__);
    }
}
