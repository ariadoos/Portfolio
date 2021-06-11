<?php

namespace App\Modules\Users\Http\Controllers\Api;

use Modules\Core\Http\Controllers\CoreBaseController;
use App\Modules\Users\Services\UserService;
use App\Modules\Users\Http\Requests\User\UserRequest;
use App\Modules\Users\Http\Requests\User\UserCreateRequest;
use App\Modules\Users\Http\Requests\User\UserDeleteRequest;
use App\Modules\Users\Http\Requests\User\UserUpdateRequest;

class UserController extends CoreBaseController
{
    /**
     * UserService instance
    **/
    protected $service;

    /**
     * UserController constructor.
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
        //parent::__construct();
        $this->service = $service;
    }


    /**
     * @param UserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(UserRequest $request)
    {
        try {
          
        } catch (\Exception $t) {
           return $this->sendErrorResponse($t->getMessage());
        }
    }


    /**
    * @param UserCreateRequest $request
    * @return \Illuminate\Http\JsonResponse
    */
    public function create(UserCreateRequest $request)
    {
       try {
         
       } catch (\Exception $t) {
          return $this->sendErrorResponse($t->getMessage());
       }
    }


     /**
     * @param UserUpdateRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
     public function update(UserUpdateRequest $request)
     {
        try {
         
        } catch (\Exception $t) {
              return $this->sendErrorResponse($t->getMessage());
        }
     }


     /**
     * @param UserDeleteRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
     public function delete(UserDeleteRequest $request)
     {
        try {
    
        } catch (\Exception $t) {
           return $this->sendErrorResponse($t->getMessage());
        }
     }
}
