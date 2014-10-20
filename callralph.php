<?php
    include "_include/variables.php";

    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
    <Response>
        <Say>Calling!</Say>
        <Dial callerId="+17165074992"><?php echo $homePhone ?></Dial>
        <Say>Ralph is unavailable at this time. Please try again later.</Say>
        
        <?php include "_include/call-options.php"; ?>
    </Response>