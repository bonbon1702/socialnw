<?php

use Services\User\IUserService;
use Repositories\User\IUserRepository;
use Core\GoogleMap;
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

    /**
     * @var googleMap
     */
    private $googleMap;

    private $googleMapHelper;

    public function __construct(IUserRepository $userRepository, IUserService $userService, GoogleMap $googleMap, GoogleMapHelper $googleMapHelper)
    {
        $this->userRepository = $userRepository;
        $this->userService = $userService;
        $this->googleMap = $googleMap;
        $this->googleMapHelper = $googleMapHelper;
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
        $this->googleMap->createMarker(21.0106785,105.8351183);
        $this->googleMap->createMarker(21.0345135,105.8251191);
        $this->googleMap->createMarker(21.0345135,105.8351191);


        $results = $this->googleMapHelper->findCoordinate('TP Ho chi minh, Viet Nam');
        $re = $this->googleMapHelper->findAddress(21.0106785,105.8351183);
        Debugbar::info($results);
        $render = $this->googleMap->render();
        return View::make('Homepage.home', array(
            'user' => $user,
            'render' => $render
        ));
    }

}
