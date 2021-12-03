<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/contact.css" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h3>Envoyer nous un message !</h3>
        <form action="https://postmail.invotes.com/send" method="post" id="email_form">
            <label for="subject">votre e-mail</label>
            <input type="text" name="subject" placeholder="c.xavier@mail.fr" />
            <label for="message">Message</label>
            <textarea name="text" placeholder="Message"></textarea>
            <input type="hidden" name="access_token" value="27g8369ns1dkbpnx4rog2nj3" />
            <!-- return urls can be fully qualified -OR-
         start with / for root relative -OR-
         start with . for url relative -->
            <!-- <input type="hidden" name="success_url" value=".?message=Email+Successfully+Sent%21&isError=0" /> -->
            <input type="hidden" name="success_url" value="http://localhost/IPSSI/projet-php-semaine/?page=contact" />
            <input type="hidden" name="error_url" value=".?message=Email+could+not+be+sent.&isError=1" />


            <!-- set the reply-to address -->
            <!-- <input type="text" name="reply_to"
                placeholder="Your Email" /> -->

            <!-- to append extra fields, use the extra_ prefix.
        Entries will be appended to your message body. -->
            <!-- <input type="text" name="extra_phone_number"
                placeholder="Phone Number" /> -->

            <!-- to split your message into 160 chars
         for an sms gateway -->
            <!-- <input type="hidden"
                name="sms_format" value="true" /> -->
            <div class="row">
                <input id="submit_form" type="submit" value="Envoyer" class="btn" />
            </div>
    </div>

    </form>

</body>

</html>