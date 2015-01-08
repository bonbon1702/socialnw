<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 1/8/2015
 * Time: 10:36 AM
 */

namespace Services;


use Core\BaseService;
use Repositories\ShopPostRepository;
use Repositories\ShopRepository;

class ShopPostService implements BaseService{

    private $shopPostRepository;
    function __construct(ShopPostRepository $shopPostRepository)
    {
        // TODO: Implement __construct() method.
        $this->shopPostRepository = $shopPostRepository;
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function update(array $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($column, $value)
    {
        // TODO: Implement delete() method.
    }

}