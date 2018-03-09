<?php
        //if "email" variable is filled out, send email
        if (isset($_REQUEST['email']))  {
        
        //Email information
        $admin_email = "samsonanami@gmail.com";
        $email = $_POST['Email'];
        $subject = $_POST['Phone'];
        $comment = $_POST['Message'];
        
        //send email
        mail($admin_email, "$subject", $comment, "From:" . $email);
        
        //Email response
        echo "Thank you for contacting us!";
        }
        
        //if "email" variable is not filled out, display the form
        else  {
             //Email response
            echo "Error: Message not sent!";
            }
?>