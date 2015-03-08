<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Mustache\Billing\Factory;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app['validator']->extend('minimum_order', function($attribute, $value, $parameters) 
		{
			return (int) $value >= 4;
		});
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);

		$this->app->bind('Mustache\Billing\Factory', function($app)
		{
			return new Factory($app['config']->get('services.billing'));	
		});
	}

}
