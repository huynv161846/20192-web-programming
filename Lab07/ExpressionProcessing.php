<html>
    <head><title>Check Valid Expression</title></head>
    <body>
        <?php
            $email = $_POST['email'];
            $url = $_POST['url'];
            $phone = $_POST['phone'];
            if (preg_match('/^[A-Za-z0-9_]+@[A-Za-z0-9.]+\.[A-Za-z]{2,}$/', $email)){
                print "Your email address is valid: $email<br>";
            } else{
                print "Your email address is invalid: $email<br>";
            }
            
            if (preg_match('/^(http(s)?:\/\/)?[A-Za-z0-9\.]+\.+[A-Za-z]{2,}$/', $url)){
                print "The url is valid:  $url<br>";
            } else{
                print "The url is invalid: $url<br>";
            }
               
            //check valid phone number
            if (preg_match('/^[0|+84]+[0-9]{9}$/', $phone)){
                print "Valid phone number: $phone<br>";
            } else{
                print "INVALID phone number: $phone<br>";
            }
        ?>
    </body>
</html>