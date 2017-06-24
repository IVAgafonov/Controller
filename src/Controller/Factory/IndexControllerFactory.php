<?php

namespace IVAgafonov\Controller\Factory;

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
        $controller = new \IVAgafonov\Controller\IndexController();
        return $controller;
    }
}