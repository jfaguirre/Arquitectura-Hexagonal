<?php

namespace Src\Admin\User\Application;

use Src\Admin\User\Domain\Contracts\UserRepositoryInterface;
use Src\Admin\User\Domain\Entities\User;
use Src\Admin\User\Domain\Value_objects\UserEmail;
use Src\Admin\User\Domain\Value_objects\UserName;

class CreateUserUseCase {

    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository){

        $this->userRepository = $userRepository;
    }

    public function execute(int $id, string $name, string $email) {

        $valueObjectName = new UserName($name);
        $valueObjectEmail = new UserEmail($email);
        $user = new User($id, $valueObjectName, $valueObjectEmail);

        $this->userRepository->Save($user);
    }
}