<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 11/3/2014
 * Time: 10:31 AM
 */
//user bind
App::bind('Repositories\User\IUserRepository', 'Repositories\User\UserRepository');
App::bind('Services\User\IUserService', 'Services\User\UserService');