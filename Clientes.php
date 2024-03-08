<?php

class Clientes {
    private String $name;
    protected String $email;

    public function getEmail(){
        $this->email = "email@gmail.com";
        return $this->email;

    }
}

?>