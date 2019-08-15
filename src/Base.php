<?php
/**
 * This work is licensed under the Creative Commons Attribution-NonCommercial
 * 4.0 International License. To view a copy of this license, visit
 * http://creativecommons.org/licenses/by-nc/4.0/ or send a letter to Creative
 * Commons, PO Box 1866, Mountain View, CA 94042, USA.
 */
namespace Dajoho\Php\App;

use DI\ContainerBuilder;

/**
 * Class Base
 * @package Dajoho\Php\App
 */
abstract class Base
{
    /**
     * @var \DI\Container
     */
    private $container;

    /**
     * App constructor
     */
    public function __construct()
    {
        try {
            $builder = new ContainerBuilder();
            $this->container = $builder->build();
        } catch (\Exception $e) {
            //TODO: deal with this exception
        }
    }

    /**
     * @return bool
     */
    protected function isDevelopmentEnvironment()
    {
        return false;
    }

    /**
     * @return \DI\Container
     */
    public function getContainer()
    {
        return $this->container;
    }
}