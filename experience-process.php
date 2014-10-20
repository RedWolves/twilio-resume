<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
    <Response>
<?php

        $digit = $_REQUEST['Digits'];

        if ( $digit == '1' ) {
?>
        <Say>Vice President of Training at append To</Say>
        <Play>mp3/experience-1.mp3</Play>
<?php
        } elseif ( $digit == '2') {
?>
        <Say>Board of Directors at jay Query Foundation</Say>
        <Play>mp3/experience-2.mp3</Play>
<?php
        } elseif ( $digit == '3') {
?>
        <Say>Senior Engineeer at Brand Logic</Say>
        <Play>mp3/experience-3.mp3</Play>
<?php
        } elseif ( $digit == '7') {
            include "_include/experience-options.php";
        } elseif ( $digit == '5') {
            include "_include/call-options.php";
        } else {
            include "_include/experience-options.php";
        }

        // Play the experience menu again after we heard one already.
        if ($digit == '1' or $digit == '2' or $digit == '3') {

            include "_include/experience-options.php";
        }
?>
    </Response>