<?php

        $digit = $_REQUEST['Digits'];

        if ( $digit == '1' ) {
            header("Location: accomplishments.php");
        } elseif ( $digit == '2') {
            header("Location: skills.php");
        } elseif ( $digit == '3') {
            header("Location: experience.php");
        } elseif ( $digit == '7') {
            header("Location: repeat.php");
        } elseif ( $digit == '0') {
            header("Location: callralph.php");
        } else {
            header("Location: repeat.php");
        }
?>