<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\Users\UserRepositoryInterface;

class UserService
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    /**
     * UserService constructor.
     *
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Add a new USer
     *
     * @param array $input
     *
     * @return \App\Models\User|null
     */
    public function store(array $input)
    {
        $data = [];
        $data['password'] = password_hash($input['password'], PASSWORD_BCRYPT);
        $data['name'] = $input['name'];
        $data['nickname'] = $input['nickname'];
        $data['email'] = $input['email'];
        $data['phone'] = $input['phone'];
        $data['member_type'] = 'e';

        return $this->userRepository->store($data);
    }

    /**
     * Update user info
     *
     * @param $id
     * @param array $input
     *
     * @return \App\Models\User|null
     */
    public function update(int $id, array $input)
    {
        $data = [];
        $data['name'] = $input['name'];
        $data['nickname'] = $input['nickname'];

        return $this->userRepository->update($id, $data);
    }
}
