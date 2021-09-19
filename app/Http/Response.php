<?php

namespace App\Http;

class Response{
    
    /**
     * Código do Status HTTP
     * @var integer
     */
    private $http_status = 200;

    /**
     * Cabeçalho do Response
     * @var array
     */
    private $headers = [];

    /**
     * Tipo de conteúdo que está 
     * sendo retornado do response
     * @var string
     */
    private $contentType = 'text/html';

    /**
     * Conteúdo do Response
     * @var mixed
     */
    private $content;

    /**
     * Método responsável por iniciar 
     * a classe e definir os valores
     * @param integer
     * @param mixed
     * @param string
     */
    public function __construct($httpCode, $content){
        $this->httpCode = $httpCode;
        $this->content = $content;
    }

    /**
     * Método responsável por alterar
     * o contentType do Response
     * @param string
     */
    public function setContentType($contentType){
        $this->contentType = $contentType;
    }

    // parei no ep 2 no time: 15:09
    public function addHeader($key, $value){
        $this->headers[$key] = $value;
    }

}
