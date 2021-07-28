<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
			view()->composer('layout', function ($view) {
				$categories = Category::
				with(array('childs' => function($query) {
					$query->with('childs');
				}))
				->with('brands')
				->where('parent_id', 0)
				->get();
				$view->with('categories', 	$categories);
			});

			
    }
}
