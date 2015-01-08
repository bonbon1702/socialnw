<?php

use Services\UserService;
use Repositories\UserRepository;
use Core\GoogleMapHelper;

class ShopController extends BaseController
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

    public function __construct(UserRepository $userRepository, UserService $userService, GoogleMapHelper $googleMapHelper)
    {
        $this->userRepository = $userRepository;
        $this->userService = $userService;
        $this->googleMapHelper = $googleMapHelper;
    }

    public function showShop($name)
    {
        $user = $this->userRepository->getRecent();

        return View::make('Shoppage.shop', array(
            'user' => $user
        ));
    }
}
