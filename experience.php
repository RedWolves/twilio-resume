<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
    <Response>
        <Say>Experience</Say>
        <Say>Listen to Ralph talk about his experiences, choose one of the following.</Say>
        
        <?php include "_include/experience-options.php"; ?>
    </Response>