<?php

namespace App\Http;

class Request{
    
    /**
     * Método Http da requisição
     * @var string
     */
    private $httpMethod;

    /**
     * Uri da nossa página
     * @var string
     */
    private $uri;

    /**
     * Parâmetros da url
     * @var array
     */
    private $queryParams = [];

    /**
     * Variáveis recebidas no post da página
     * @var array
     */
    private $postParams = [];

    /**
     * Cabeçalho dessa requisição
     * @var array
     */
    private $headers = [];

    public function __construct(){
        $this->queryParams  = $_GET ?? [];
        $this->postParams   = $_POST ?? [];
        $this->headers      = getallheaders();
        $this->httpMethod   = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri          = $_SERVER['REQUEST_URI'] ?? '';
    }

    /**
     * Método responsável por retornar o
     * método http da requisição
     * @return string
     */
    public function getHttpMethod(){
        return $this->httpMethod;
    }

    /**
     * Método responsável por retornar o
     * uri da requisição
     * @return string
     */
    public function getUri(){
        return $this->uri;
    }

    /**
     * Método responsável por retornar 
     * os headers da requisição
     * @return array
     */
    public function getHeaders(){
        return $this->uri;
    }

    /**
     * Método responsável por retornar 
     * os parâmetros da query da requisição
     * @return array
     */
    public function getQueryParams(){
        return $this->queryParams;
    }

    /**
     * Método responsável por retornar
     * os parâmetros post da requisição
     * @return array
     */
    public function getPostParams(){
        return $this->postParams;
    }

}
