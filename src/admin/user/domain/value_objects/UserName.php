<?php

namespace Src\Admin\User\Domain\Value_objects;

class UserName {

    private string $name;

    public function __construct(string $name){

        if(strlen($name) < 3) {
            throw new \InvalidArgumentException("El nombre debe ser como minimo de 3 caracteres.");
        }
    $this->name = $name;
    }

    public function value(): string{
        return $this->name;
    }

}