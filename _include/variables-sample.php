<?php
    $homePhone = "+15555551212";
    $twilioPhone = "+15555551213";

    // make an associative array of callers we know, indexed by phone number
    $people = array(
        "+15555551212"=>"The Hulk",
        "+15555551213"=>"Ironman",
        "+15555551214"=>"Captain America",
        "+15555551215"=>"Thor",
        "+15555551216"=>"Agent Colson"
    );

    $sid = "ACXXXXXX"; // Your Account SID from www.twilio.com/user/account
    $token = "YYYYYY"; // Your Auth Token from www.twilio.com/user/account
    $appSid = "APXXXXX";
?>