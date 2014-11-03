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

class UserService implements  IUserService{

    private $userRepository;

    function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function errors()
    {
        // TODO: Implement errors() method.
    }

    public function all(array $related = null)
    {
        // TODO: Implement all() method.
    }

    public function get($id, array $related = null)
    {
        // TODO: Implement get() method.
    }

    public function getWhere($column, $value, array $related = null)
    {
        // TODO: Implement getWhere() method.
    }

    public function getRecent(array $related = null)
    {
        // TODO: Implement getRecent() method.
        $user = $this->userRepository->getRecent();

        return $user;
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
        $this->userRepository->create($data);

        return true;
    }

    public function update(array $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function deleteWhere($column, $value)
    {
        // TODO: Implement deleteWhere() method.
    }

    public function getByEmail($email){
        $user = $this->userRepository->getByEmail($email);

        return $user;
    }

}