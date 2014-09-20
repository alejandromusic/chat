<?php
    print_r($_POST);
    
    $x=($_POST["number"]);
    
    if ($x > 0)
    {
        printf("The number is positive\n");
    }
    else if ($x == 0)
    {
        printf("You picked 0\n");
    }
    else
    {
        printf("That's a negative number\n");
    }
    
    require("PHPMailer/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "mail.lacitycollege.edu";
    $mail->SetFrom("reyespja@lacitycollege.edu");
    $mail->AddAddress("alejandromusic@hotmail.com");
    $mail->Subject= "Hola pelao";
    $mail->Body="Hello";
    if ($mail->Send() == false)
    {
        //die($mail->ErrInfo);
    }
    else
    {
        location("form1.php");
        exit;
    }
    
?> 
