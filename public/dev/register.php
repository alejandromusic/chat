<? if(!empty($_POST["name"]) && !empty($_POST["city"]) &&! empty($_POST["gender"]))
        { 
            $to = "alejandromusic@hotmail.com";
            $subject = "registration";
            $body = "This person just registered:\n\n" .
              $_POST["name"] . "\n" .
              $_POST["gender"] . "\n" .
              $_POST["city"];
            $headers = "From alejandromusic@hotmail.com\r\n";
            mail($to,$subject,$body,$headers);
        }
        else
        {
            header("Location: http://172.16.63.128/form.php");
            exit;
        }
?> 
<!DOCTYPE html>

<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        You are registered (really)
    </body>
</html>
