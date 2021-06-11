<?php

namespace App\Modules\Users\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use App\Modules\Users\Models\User;
use App\Modules\Users\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * User instance
     * @var $model
    **/
    protected $model;

    /**
     * UserRepository constructor.
     * @param User $model
    **/
    public function __construct(User $model)
    {
       parent::__construct();
       $this->model = $model;
    }
}
