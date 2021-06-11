<?php
/**
 * Created by PhpStorm.
 * User: @ariadoos - Nikesh Bdr. Adhikari
 * Date: 1/29/2021
 * Time: 7:14 PM
 */
namespace App\Modules\Users\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\Users\Repositories\Eloquent\UserRepository;
use App\Modules\Users\Repositories\Interfaces\UserRepositoryInterface;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__. '/../Routes/web.php');
         $this->loadRoutesFrom(__DIR__. '/../Routes/api.php');

        //binding interfaces to implementations
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

        /**
        if ($this->app->runningInConsole()) {
            $this->commands([]);
        } **/
    }
}
