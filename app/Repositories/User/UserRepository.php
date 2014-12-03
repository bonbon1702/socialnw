<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 11/3/2014
 * Time: 9:46 AM
 */

namespace Repositories\User;

use Repositories\User\IUserRepository as IUserRepository;

use \Sentry as Sentry;

class UserRepository implements IUserRepository
{

    private $user;

    public function __construct(\User $user)
    {
        $this->user = $user;
    }

    public function errors($code)
    {
        // TODO: Implement errors() method.
    }

    public function all(array $related = null)
    {
        // TODO: Implement all() method.
        $users = Sentry::findAllUsers();

        return $users;
    }

    public function get($id, array $related = null)
    {
        // TODO: Implement get() method.
        $user = null;

        if (!empty($id)) {
            try {
                $user = Sentry::findUserById($id);
            } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
                echo 'User was not found.';
            }
        }

        return $user;
    }

    public function getWhere($column, $value, array $related = null)
    {


    }

    public function getRecent(array $related = null)
    {
        // TODO: Implement getRecent() method.
        $user = null;
        try {
            // Get the current logged in user
            $user = Sentry::getUser();

        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            echo 'No User is logged';
        }
        return $user;
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
        if (Sentry::check() == true) return true;

        if (!empty($data)) {
            $count = $this->user->where('email', '=', $data['email'])->count();

            if (empty($count)) {
                // Create the user
                $user = Sentry::createUser(array(
                    'email' => $data['email'],
                    'persist_code' => $data['facebookId'],
                    'password' => $data['facebookId'],
                    'first_name' => $data['username'],
                    'activated' => true,
                ));
            }
            $user = $this->getByEmail($data['email']);
            // Log the user in
            Sentry::login($user, false);
        }
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

    public function getByEmail($email)
    {
        $user = null;

        if (!empty($email)) {
            $user = Sentry::findUserByCredentials(array(
                'email' => $email
            ));
        }

        return $user;
    }


}