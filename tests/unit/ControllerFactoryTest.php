<?php
namespace Tests\unit;

/**
 * @coversDefaultClass \IVAgafonov\Controller\Factory\IndexControllerFactory
 */
class ControllerFactoryTest extends \Codeception\Test\Unit
{
    /**
     * @var \Test\
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testControllerFactoryInit()
    {
        $controllerFactoryV1 = new \IVAgafonov\Controller\v1\Factory\IndexControllerFactory();
        $this->assertInstanceOf('\IVAgafonov\Controller\Factory\ControllerFactoryInterface', $controllerFactoryV1);
    }

    public function testControllerFactoryCreateController()
    {
        $config = [];

        $controllerFactoryV1 = new \IVAgafonov\Controller\v1\Factory\IndexControllerFactory();
        $this->assertInstanceOf('\IVAgafonov\Controller\Factory\ControllerFactoryInterface', $controllerFactoryV1);

        $controllerV1 = $controllerFactoryV1->create($config);
        $this->assertInstanceOf('\IVAgafonov\Controller\ControllerInterface', $controllerV1);
    }
}