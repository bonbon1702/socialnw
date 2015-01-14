<?php

use Services\UserService;
use Repositories\UserRepository;
use Core\GoogleMapHelper;

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

    private $googleMapHelper;

    public function __construct(UserRepository $userRepository, UserService $userService, GoogleMapHelper $googleMapHelper,\Services\PostService $postService)
    {
        $this->userRepository = $userRepository;
        $this->userService = $userService;
        $this->googleMapHelper = $googleMapHelper;
        $this->postService = $postService;
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
        $user = $this->userRepository->getRecent();

        return View::make('Homepage.home', array(
            'user' => $user
        ));
    }

}
