<?php

namespace App\Modules\Users\Services;

use Modules\Core\Services\BaseService;
use App\Modules\Users\Repositories\Interfaces\UserRepositoryInterface;

class UserService extends BaseService
{
    /**
     * UserRepositoryInterface instance.
    **/
    protected $repository;

   /**
    * UserService constructor.
    * @param UserRepositoryInterface $repository
   **/
    public function __construct(UserRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }
}
