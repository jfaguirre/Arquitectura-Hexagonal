<?php 

namespace Src\Admin\User\Application;

use Src\Admin\User\Domain\Contracts\UserRepositoryInterface;

class UserByIdUseCase {

    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository) {

        $this->userRepository = $userRepository;
    }

    public function execute(int $id){
        $this->userRepository->UserById($id);
    }
}