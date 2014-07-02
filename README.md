php-pushnotifiction
===================

Send pushnotification using php code


Step 1:  Open PHP.ini file and make sure your open_ssl  extension in uncommented .
If not then follow the step 2.

Step 2 : remove comment from “extension=php_openssl.dll ”
remove semicolon (;) and restart your server.

Step 3 :  You need to get certificate file for Apple  push notification ,and also device token from both device.

Step 4 : open iPhone_push.php and give path for your certificate.
(make sure your certificate have .pem extenuation ).

Step 5 : open android_push.php and replace  $apiKey with your google generated api key.

Step 6 : sendNotification.php is example file so open it and config it Replace device token and call member function.
