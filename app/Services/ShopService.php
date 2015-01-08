<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 1/8/2015
 * Time: 10:35 AM
 */

namespace Services;


use Core\BaseService;
use Repositories\ShopRepository;

class ShopService implements BaseService{

    private $shopRepository;

    function __construct(ShopRepository $shopRepository)
    {
        // TODO: Implement __construct() method.
        $this->shopRepository = $shopRepository;
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