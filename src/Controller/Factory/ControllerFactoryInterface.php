<?php

namespace IVAgafonov\Controller\Factory;

/**
 * Class ControllerFactoryInterface
 * @package IVAgafonov\Controller\Factory
 */
interface ControllerFactoryInterface
{
    /**
     * @param $config
     * @return \IVAgafonov\Controller\ControllerInterface
     */
    public function create($config);
}