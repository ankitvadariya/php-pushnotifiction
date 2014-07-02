<?php
/**
 * @file
 * Autoload.php
 *
 * Push demo
 *
 * LICENSE
 * @author (C) 2014 thePHPinfo.com
 * @version 1.0
 */

/**
 * @defgroup ApnsPHP_Log Log
 * @ingroup ApplePushNotificationService
 */

/**
 * The Log Interface.
 *
 * Implement the Log Interface and pass the object instance to all
 * ApnsPHP_Abstract based class to use a custom log.
 *
 * @ingroup ApnsPHP_Log
 */
interface ApnsPHP_Log_Interface
{
	/**
	 * Logs a message.
	 *
	 * @param  $sMessage @type string The message.
	 */
	public function log($sMessage);
}
