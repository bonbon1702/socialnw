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

    public function signInWithFacebook()
    {
        // get data from input
        $code = Input::get('code');

        // get fb service
        $fb = OAuth::consumer('Facebook');

        // check if code is valid

        // if code is provided get user data and sign in
        if (!empty($code)) {

            // This was a callback request from facebook, get the token
            $token = $fb->requestAccessToken($code);

            // Send a request with it
            $result = json_decode($fb->request('/me'), true);

            $data = array(
                'facebookId' => $result['id'],
                'username' => $result['name'],
                'email' => $result['email']
            );

            $url = action('HomeController@showHome');

            if ($this->userService->create($data)) {
                try {
                    $user = $this->userService->getByEmail($data['email']);
                    // Log the user in

                    Sentry::login($user, false);
                } catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
                    echo 'Login field is required.';
                }

                return Redirect::to($url);
            } else {
                return Redirect::to($url);
            }
        } // if not ask for permission first
        else {
            // get fb authorization
            $url = $fb->getAuthorizationUri();

            // return to facebook login url
            return Redirect::to((string)$url);
        }
    }


}