<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
    <Response>
        <Say>Skills</Say>
        <Play>mp3/skills.mp3</Play>
        
        <?php include "_include/call-options.php"; ?>
    </Response>