<?php

/**
 * @file
 * android_push.php
 *
 * Push demo
 *
 * LICENSE
 * @author (C) 2014 thePHPinfo.com
 * @version 1.0
 */
class pushForAndroid {

    public function sendAndroidPush($message, $event_id, $reg_id) {

// Replace with real BROWSER API key from Google APIs
// This key will be the API key from the Google.
        $apiKey = "AIzaSyCg1v4u6c0hrOCUTehNWoybPOm_4oJuTNY";


// Replace with real client registration IDs 
        //$registrationIDs = array("APA91bESFltuT5mVdG2Da-sMsUTETFqLSWw6ZuiYXE2vpGE5rsQGpJjKsP-IpPvFtjQV-EbgDCzPCFrPFc2QAnHJ8BhPqoLi9H15Sym0RXeRxKoiE56xHVKpDOaiWM8G70CGwmcLUyG5Veqdf42hDXPBuDDLZEWMIw");
//print_r($registrationIDs);
// Message to be sent
// Set POST variables
        $url = 'https://android.googleapis.com/gcm/send';
        $registrationIDs = array($reg_id);
        $fields = array(
            'registration_ids' => $registrationIDs,
            'data' => array('data' => array("message" => $message, 'event_id' => $event_id)),
        );
        //$fields = json_encode($fields);
        // print_r(json_encode($fields));
        $headers = array(
            'Authorization: key=' . $apiKey,
            'Content-Type: application/json'
        );

// Open connection
        $ch = curl_init();

// Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

// Execute post
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //echo 'Curl error: ' . curl_error($ch);
        }

// Close connection
        curl_close($ch);
        //echo "OK";
        return true;
    }

}
?>


