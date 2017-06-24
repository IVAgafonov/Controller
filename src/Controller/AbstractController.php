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
        echo json_encode(['status' => 'ok']);
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