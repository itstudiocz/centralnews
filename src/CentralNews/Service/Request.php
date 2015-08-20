<?php

namespace CentralNews\Service;

class Request
{
    /** @var string */
    protected $operation;

    /** @var array */
    protected $params;

    /** @var string */
    protected $namespace;

    /** @var string */
    protected $action;

    /** @var array */
    protected $headers;

    /**
     * vola se metoda call($operation,$params=array(),$namespace='http://tempuri.org',$soapAction='',$headers=false,$rpcParams=null,$style='rpc',$use='encoded')
     * 
     * @param string $operation
     * @param array $params
     * @param string $namespace
     * @param string $action
     * @param array $headers
     */
    public function __construct($operation = '', array $params = array(), $namespace = '', $action = '', array $headers = array())
    {
        $this->setOperation($operation);
        $this->setParams($params);
        $this->setNamespace($namespace);
        $this->setAction($action);
        $this->setHeaders($headers);
    }

    public function getOperation()
    {
        return $this->operation;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function getNamespace()
    {
        return $this->namespace;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function setOperation($operation)
    {
        $this->operation = $operation;
    }

    public function setParams(array $params)
    {
        $this->params = $params;
    }

    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    }

    public function setAction($action)
    {
        $this->action = $action;
    }

    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }

}