<?php
    include "_include/variables.php";
    require('twilio-php/Services/Twilio.php');

    $client = new Services_Twilio($sid, $token);
    try {
        $call = $client->account->calls->create(
          $twilioPhone, // From a valid Twilio number
          '+1' . $_REQUEST["Phone"], 
          $appSid
        );
    }catch (Exception $e) {
        echo $e;
    }
?>