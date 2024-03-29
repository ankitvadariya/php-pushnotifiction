<?php

/**
 * @file
 * iPhone_push.php
 *
 * Push demo
 *
 * LICENSE
 * @author (C) 2014 thePHPinfo.com
 * @version 1.0
 */

class pushForIphone {


    public function sendIphoneNot($title = 'title', $data, $divToken = 'cb369c7e91698e525b6840a331231ba6608f83e87aa85b33abe982fd2ab97601') {


        date_default_timezone_set('Asia/Kolkata');

// Report all PHP errors
        error_reporting(-1);

// Using Autoload all classes are loaded on-demand
        require_once 'ApnsPHP/Autoload.php';

// Instanciate a new ApnsPHP_Push object
        $push = new ApnsPHP_Push(
                ApnsPHP_Abstract::ENVIRONMENT_SANDBOX, 'server_certificates_bundle_sandbox.pem'
        );

// Set the Provider Certificate passphrase
// $push->setProviderCertificatePassphrase('test');
// Set the Root Certificate Autority to verify the Apple remote peer
//$push->setRootCertificationAuthority('server_certificates_bundle_sandbox.pem');
// Connect to the Apple Push Notification Service
        $push->connect();

// Instantiate a new Message with a single recipient
        $message = new ApnsPHP_Message($divToken);

// Set a custom identifier. To get back this identifier use the getCustomIdentifier() method
// over a ApnsPHP_Message object retrieved with the getErrors() message.
        $message->setCustomIdentifier("Message-Badge-3");

// Set badge icon to "1"
        $message->setBadge(1);

// Set a simple welcome text
        $message->setText($title);

// Play the default sound
        $message->setSound();

// Set a custom property
        foreach ($data as $key => $value) {
            $message->setCustomProperty($key, $value);
        }


// Set another custom property
// Set the expiry value to 30 seconds
        $message->setExpiry(30);

// Add the message to the message queue
        $push->add($message);

// Send all messages in the message queue
        $push->send();

// Disconnect from the Apple Push Notification Service
        $push->disconnect();

// Examine the error message container
        $aErrorQueue = $push->getErrors();
        if (!empty($aErrorQueue)) {
            // var_dump($aErrorQueue);
        }
        return true;
    }

}

