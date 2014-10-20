<!DOCTYPE html>
<html>
<head>

    <title>Ralph Whitbeck's Twilio Resume</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <style type="text/css">
        .container-fluid {
            background: url(img/ralphwhitbeck.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            margin: auto;
            padding: 0;
            width: 100%;
            height: 100%;
            position: relative;

        }

        #form {
            background-color: rgba(255,255,255, 0.75);
            width: 100%;
            height: 300px;
            position: absolute;
            top: 50%;
            margin-top: -50px;
        }
        #content {
            width: 75%;
            margin: auto;
            text-align: center;
        }
    </style>

</head>
<body>
    <div class="container-fluid">
        <a href="https://github.com/RedWolves/twilio-resume"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/652c5b9acfaddf3a9c326fa6bde407b87f7be0f4/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6f72616e67655f6666373630302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png"></a>
        <div id="form">
            <div id="content">
                <h1>Ralph Whitbeck's Twilio Resume</h1>
                <p>Enter your name and phone number and receive an automated call.</p>
                <form class="form-inline" id="makecall" action="makecall.php" method="post" role="form">

                  <div class="form-group">
                    <div class="input-group">
                      <label class="sr-only" for="Phone">Phone</label>
                      <input class="form-control input-lg" type="tel" placeholder="Enter Phone" id="Phone" name="Phone" required>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary btn-lg">Call</button>
                </form>
            </div>
        </div>

    </div>
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function setDivHeight (div, height) {
            $(div).css("height", height);
        }

        setDivHeight( ".container-fluid", $(window).height() );
        setDivHeight( "#form", $("#content").outerHeight()+40);

        $(window).on("resize", function(){
            setDivHeight( ".container-fluid", $(window).height() );
            setDivHeight( "#form", $("#content").outerHeight()+40);
        });

        $('#makecall').ajaxForm(function() {
            $("#makecall").hide();
            $("p").text("Making the call to your phone now. Thanks!");
        }).on("submit", function(){
            $("#makecall").ajaxSubmit();
            return false;
        });



    </script>
</body>
<html>
