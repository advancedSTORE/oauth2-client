<?php

namespace AdvancedStore\Oauth2Client;

use Illuminate\Support\ServiceProvider;

class Oauth2ClientServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('advanced-store/oauth2-client');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerOauth2Client();
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

	protected function registerOauth2Client() {

		$this->app['as.oauth2.client'] = $this->app->share(function($app) {

			$config = $app['config'];

			return new Oauth2Client( $config->get('oauth2-client::client.id'), $config->get('oauth2-client::client.secret') );

		});

	}

}
