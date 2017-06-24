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
        $controllerFactory = new \IVAgafonov\Controller\Factory\IndexControllerFactory();
        $this->assertInstanceOf('\IVAgafonov\Controller\Factory\ControllerFactoryInterface', $controllerFactory);
    }

    public function testControllerFactoryCreateController()
    {
        $config = [];

        $controllerFactory = new \IVAgafonov\Controller\Factory\IndexControllerFactory();
        $this->assertInstanceOf('\IVAgafonov\Controller\Factory\ControllerFactoryInterface', $controllerFactory);

        $controller = $controllerFactory->create($config);
        $this->assertInstanceOf('\IVAgafonov\Controller\ControllerInterface', $controller);
    }
}