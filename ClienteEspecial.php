<?php

class ClienteEspecial extends Clientes{
    private String $cnpj;

    function getCnpj(){
        $this->cnpj = "1234";
    }
}

?>