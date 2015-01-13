<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 1/8/2015
 * Time: 10:33 AM
 */

namespace Services;


use Core\BaseService;
use Repositories\PostRepository;

class PostService implements BaseService{

    private $postRepository;
    function __construct(PostRepository $postRepository)
    {
        // TODO: Implement __construct() method.
        $this->postRepository = $postRepository;
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
        $this->postRepository->create($data);
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