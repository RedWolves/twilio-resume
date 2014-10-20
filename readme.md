# Twilio Resume

A simple Twilio Voice app created with TwiML that allows a user to call a number and listen and interact through my resume.

Currently, I am only using a trial account so you'll get a nag message when you call in.  Feel free to call at (716) 507-4992 and try it out.

## Set up

Once you clone or unzip your files you'll need to set up your variables.php file.

1. Copy the variables-sample.php in the _include folder to variables.php
2. [Create an account on Twilio](https://www.twilio.com/try-twilio)
3. Update the variables.php with your own AccountID, Token and ApplicationID
4. Within your Twilio User Account set up your new number to point to the Request Url at http://yourdomain.com/answer.php


## Testing on localhost

To be able to call your number and be able to test locally you need to set up ngrok to tunnel into your machine and make your localhost site available externally.

## Have the app call you

If you go to http://twilio-resume.azurewebsites.net/ you can enter a phone number and the app will call you instead.  Since I am only using the demo account this page only works for my phone number.  The full upgrade will work with any number.

## License
The source code is licensed under MIT.  The MP3 files and the personal content is copyrighted to me.
