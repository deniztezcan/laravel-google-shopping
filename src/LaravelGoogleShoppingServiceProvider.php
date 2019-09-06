<?php

namespace DenizTezcan\LaravelGoogleShopping;

use Illuminate\Support\ServiceProvider;

class LaravelGoogleShoppingServiceProvider extends ServiceProvider
{
	protected $defer = false;

	public function boot()
	{
		
	}

	public function register()
    {
		$this->app->singleton('googleshopping', function ($app) {
			return new LaravelGoogleShopping();
		});
	}	

	public function provides()
	{
		return ['googleshopping'];
	}
}