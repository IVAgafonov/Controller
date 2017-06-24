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
    }

    public function testControllerIndexAction()
    {
        $controller = new \IVAgafonov\Controller\IndexController();

        $this->expectOutputString('{"status":"ok"}');
        $controller->index();
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
    }
}