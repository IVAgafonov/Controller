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
        $controllerV1 = new \IVAgafonov\Controller\v1\IndexController();
        $this->assertInstanceOf('\IVAgafonov\Controller\ControllerInterface', $controllerV1);
    }

    public function testControllerIndexAction()
    {
        $controllerV1 = new \IVAgafonov\Controller\v1\IndexController();

        $this->expectOutputString('{"status":"ok"}');
        $controllerV1->index();
    }

    public function testControllerSettersAndGetters()
    {
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