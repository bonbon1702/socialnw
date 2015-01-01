<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 11/3/2014
 * Time: 9:46 AM
 */

namespace Repositories\User;

use Illuminate\Support\Facades\Auth;
use Repositories\User\IUserRepository as IUserRepository;
use \User;

class UserRepository implements IUserRepository
{
    public function errors($code)
    {
        // TODO: Implement errors() method.
    }

    public function all(array $related = null)
    {
        // TODO: Implement all() method.
        $users = User::all();

        return $users;
    }

    public function get($id, array $related = null)
    {
        // TODO: Implement get() method.
        $user = null;

        if (!empty($id)) {
            $user = User::find($id);
        }

        return $user;
    }

    public function getWhere($column, $value, array $related = null)
    {

    }

    public function getRecent(array $related = null)
    {
        // TODO: Implement getRecent() method.
        $user = Auth::user();
        return $user;
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
        if (!empty($data)) {
            $user = User::firstOrCreate(array(
                'email' => $data['email'],
                'username' => $data['username'],
                'picture_profile' => $data['picture_profile'],
                'gender' => $data['gender']
            ));

            Auth::login($user);
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
}