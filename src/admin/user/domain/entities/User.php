<?php

namespace Src\Admin\User\Domain\Entities;

use Src\Admin\User\Domain\Value_objects\UserEmail;
use Src\Admin\User\Domain\Value_objects\UserName;

class User {

    private int $id;
    private UserName $name;
    private UserEmail $email;

    public function __construct(int $id, UserName $name, UserEmail $email) {

        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function id(): int {
        return $this->id;
    }

    public function name():UserName {
        return $this->name;
    }

    public function email(): UserEmail {
        return $this->email;
    }


}