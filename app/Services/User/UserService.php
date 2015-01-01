<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 11/3/2014
 * Time: 10:00 AM
 */

namespace Services\User;

use Services\User\IUserService as IUserService;
use Repositories\User\IUserRepository as IUserRepository;
use Artdarek\OAuth\Facade\OAuth;

class UserService implements IUserService
{

    private $userRepository;

    function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function create(array $data)
    {
        // TODO: Implement create() method.
        if ($this->userRepository->create($data)) return true;
        else return false;
    }

    public function update(array $data)
    {
        // TODO: Implement update() method.
    }


    public function delete($column, $value)
    {
        // TODO: Implement deleteWhere() method.
    }

}