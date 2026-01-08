<?php

namespace Src\Admin\User\Domain\Value_objects;

class UserEmail {

    private string $email;

    public function __construct(string $email) {

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("Debe ingresar un correo valido.");
        }
    $this->email = $email;
    }   

    public function value(): string{
        return $this->email;
    }

}