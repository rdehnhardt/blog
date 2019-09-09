<?php

namespace Skeleton\Container;

use Skeleton\Support\SkeletonServiceProvider;

class ContainerServiceProvider extends SkeletonServiceProvider
{
    /**
     * @var string
     */
    protected $directory = __DIR__;

    /**
     * @var string
     */
    protected $name = 'container';

    /**
     * @var string
     */
    protected $namespace = __NAMESPACE__;
}