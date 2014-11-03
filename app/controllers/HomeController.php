<?php

use Services\User\IUserService;
use Repositories\User\IUserRepository;
class HomeController extends BaseController
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

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()
    {
        return View::make('hello');
    }

    public function showHome()
    {
        $user = $this->userService->getRecent();

        return View::make('Homepage.home', array(
            'user' => $user
        ));
    }

}