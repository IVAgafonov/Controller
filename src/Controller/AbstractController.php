<?php

namespace IVAgafonov\Controller;

/**
 * Class AbstractController
 * @package IVAgafonov\Controller
 */
abstract class AbstractController
{
    protected $method;
    protected $params;
    protected $dataProviders = [];
    protected $request;

    /**
     * Default action
     */
    public function index()
    {
        header("HTTP/1.1 403 Forbidden");
        throw new \Exception(json_encode(['error' => ['code' => 403, 'text' => 'Controller: Forbidden']]));
    }

    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setParams($params)
    {
        $this->params = $params;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function setDataProviders($dataProviders)
    {
        $this->dataProviders = $dataProviders;
    }

    public function getDataProviders()
    {
        return $this->dataProviders;
    }

    public function setRequest($request)
    {
        $this->request = $request;
    }

    public function getRequest()
    {
        return $this->request;
    }
}