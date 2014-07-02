<?php

/**
 * @file
 * sendNotification.php
 *
 * Push demo
 *
 * LICENSE
 * @author (C) 2014 thePHPinfo.com
 * @version 1.0
 */
class Sendnotification extends BaseModel {

    public function sendPushNot() {
        //push notification for Apple devices
        require_once 'iPhone_push.php';
        $reg_id = 'registration_id of iphone';
        $iPhonePush = new pushForIphone();
        $data = Array(
            'id' => 1
        ); // in data you can pass some extra value 
        $iPhonePush->sendIphoneNot("You have an new notifiaction.", $data, $reg_id);


        //push notification for android devoice
        require_once 'android_push.php';
        $androidPush = new sendAndroidPush();
        $reg_id = 'registration_id of android device';
        $androidPush->sendpush("You have an new notifiaction.", $data, $reg_id);
        return TRUE;
    }

}

?>