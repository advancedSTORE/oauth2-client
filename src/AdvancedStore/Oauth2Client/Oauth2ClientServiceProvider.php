<?php

/**
 * @package OAuth2 Client
 * @author  advanced STORE GmbH
 * Date:    03.04.14
 */

namespace AdvancedStore\Oauth2Client;

use Illuminate\Support\ServiceProvider;

class Oauth2ClientServiceProvider extends ServiceProvider {

	const PACKAGE_NAME = 'oauth2-client';

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
		$this->mergeConfigFrom(
            __DIR__.'../config/config.php', self::PACKAGE_NAME
        );
        $this->publishes([
           __DIR__.'../Oauth2Client/'
        ], self::PACKAGE_NAME);


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
