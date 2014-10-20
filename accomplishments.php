<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
    <Response>
        <Say>Accomplishments</Say>
        <Say>Listen to how Ralph worked to bring trainings to partner conferences</Say>
        <Play>mp3/accomplishments-1.mp3</Play>
        <Say>Next, Ralph talks about organizing a community centric conference</Say>
        <Play>mp3/accomplishments-2.mp3</Play>
        <Say>Finally, Ralph discusses his successes as the Vice President of Training</Say>
        <Play>mp3/accomplishments-3.mp3</Play>
        
        <?php include "_include/call-options.php" ?>
    </Response>