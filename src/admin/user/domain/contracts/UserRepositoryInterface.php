<?php

namespace Src\Admin\User\Domain\Contracts;

use Src\Admin\User\Domain\Entities\User;

interface UserRepositoryInterface {

    public function UserById($id): User | Null;
    public function Save(User $user);
}
