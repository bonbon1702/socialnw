<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 11/3/2014
 * Time: 10:23 AM
 */

use Repositories\User\IUserRepository;
use Services\User\IUserService;

class UserController extends BaseController
{
    /**
     * @var userRepository
     */
    private $userRepository;
    /**
     * @var user Service
     */
    private $userService;

    public function __construct(IUserRepository $userRepository, IUserService $userService)
    {
        $this->userRepository = $userRepository;
        $this->userService = $userService;
    }

    public function callBack()
    {
        $callback = Fb::check();

        if ($callback){
            $result = Fb::getProfile()->asArray();
            $data = array(
                'facebookId' => $result['id'],
                'username' => $result['name'],
                'email' => $result['email']
            );

            if ($this->userService->create($data)) {
                return Redirect::to('/');
            }
        }
    }


}