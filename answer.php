<?php
    include "_include/functions.php";
    include "_include/variables.php";
    

    
 
    // if the caller is known, then greet them by name
    // otherwise, consider them just another monkey
    $name = arrayGet( $people, $_REQUEST['From'], "there");

    if ($_REQUEST['From'] == $twilioPhone) {
        $name = "Web visitor";
    }
    
        

    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
    <Response>
        <Say>Hello <? echo $name ?>.</Say>
        <Say>Thanks for calling.  I'd like to introduce you to Ralph Whitbeck.</Say>
        <Play>mp3/intro.mp3</Play>
        <Say>Ralph is a driven and experienced speaker, writer, and developer that is looking to engage and build relationships with developers; deliver presentations and demos; and encourage developer participation in the community by representing a product and or service that he is passionate about.</Say>
        <Say>Let's explore Ralph's resume.  Please choose from the following options:</Say>
        <?php include "_include/call-options.php"; ?>
    </Response>
