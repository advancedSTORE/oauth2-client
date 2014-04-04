<?php
/**
 * @package RTB-Backend
 * @author  Sebastian Knoth
 * Date:    03.04.14
 */

namespace AdvancedStore\Oauth2Client\Facades;

use Illuminate\Support\Facades\Facade;

class Oauth2ClientFacade extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 * @codeCoverageIgnore
	 */
	protected static function getFacadeAccessor()
	{
		return 'as.oauth2.client';
	}
}