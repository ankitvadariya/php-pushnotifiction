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
 * A simple logger.
 *
 * This simple logger implements the Log Interface and is the default logger for
 * all ApnsPHP_Abstract based class.
 *
 * This simple logger outputs The Message to standard output prefixed with date,
 * service name (ApplePushNotificationService) and Process ID (PID).
 *
 * @ingroup ApnsPHP_Log
 */
class ApnsPHP_Log_Embedded implements ApnsPHP_Log_Interface
{
	/**
	 * Logs a message.
	 *
	 * @param  $sMessage @type string The message.
	 */
	public function log($sMessage)
	{
		printf("%s ApnsPHP[%d]: %s\n",
			date('r'), getmypid(), trim($sMessage)
		);
	}
}
