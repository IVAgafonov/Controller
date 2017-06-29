<?php
namespace Tests\unit;

/**
 * @coversDefaultClass \IVAgafonov\Controller\IndexController
 */
class ControllerTest extends \Codeception\Test\Unit
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
    public function testControllerInit()
    {
        $controller = new \IVAgafonov\Controller\IndexController();
        $this->assertInstanceOf('\IVAgafonov\Controller\ControllerInterface', $controller);

        $controllerV1 = new \IVAgafonov\Controller\v1\IndexController();
        $this->assertInstanceOf('\IVAgafonov\Controller\ControllerInterface', $controllerV1);
    }

    public function testControllerIndexAction()
    {
        $controller = new \IVAgafonov\Controller\IndexController();

        $this->expectOutputString('{"status":"ok"}');
        $controller->index();

        $controllerV1 = new \IVAgafonov\Controller\v1\IndexController();

        $this->expectOutputString('{"status":"ok"}{"status":"ok"}');
        $controllerV1->index();
    }

    public function testControllerSettersAndGetters()
    {
        $controller = new \IVAgafonov\Controller\IndexController();

        $controller->setMethod('GET');
        $this->assertEquals('GET', $controller->getMethod());

        $controller->setParams(['name' => 'value']);
        $this->assertEquals(['name' => 'value'], $controller->getParams());

        $request = new \stdClass();

        $controller->setRequest($request);
        $this->assertEquals($request, $controller->getRequest());

        $controller->setDataProviders(['default' => $request]);
        $this->assertEquals(['default' => $request], $controller->getDataProviders());

        $controllerV1 = new \IVAgafonov\Controller\v1\IndexController();

        $controllerV1->setMethod('GET');
        $this->assertEquals('GET', $controllerV1->getMethod());

        $controllerV1->setParams(['name' => 'value']);
        $this->assertEquals(['name' => 'value'], $controllerV1->getParams());

        $request = new \stdClass();

        $controllerV1->setRequest($request);
        $this->assertEquals($request, $controllerV1->getRequest());

        $controllerV1->setDataProviders(['default' => $request]);
        $this->assertEquals(['default' => $request], $controllerV1->getDataProviders());
    }
}