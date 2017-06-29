<?php

namespace IVAgafonov\Controller\v1\Factory;

use IVAgafonov\Controller\Factory\ControllerFactoryInterface;

/**
 * Class IndexControllerFactory
 * @package IVAgafonov\Controller\Factory
 */
class IndexControllerFactory implements ControllerFactoryInterface
{
    /**
     * @param array $config
     * @return \IVAgafonov\Controller\ControllerInterface
     */
    public function create($config)
    {
        $controller = new \IVAgafonov\Controller\v1\IndexController();
        return $controller;
    }
}