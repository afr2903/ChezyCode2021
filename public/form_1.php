<?php

    if(isset($_POST['submit']))
    {

        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Comment = $_POST['Comment'];
        $Link = "https://drive.google.com/file/d/1jCftxXIKP0QFFkejBfFpV1NPo9wTXsLc/view?usp=sharing";

        if(empty($Name) || empty($Email) || empty($Comment) )
        {

            echo '<script type="text/JavaScript">alert("Please fill out all fields")</script>';
            echo '<script type="text/JavaScript">window.history.back();</script>';

        }

        else
        {

            if(strpos($Email, '@'))
            {

                $to = 'lambot3478@gmail.com'; //diegorscorpion@gmail.com
                $email_subject = 'Form de contacto pagina: ' . $subject;
                $email_body = "Mensaje del usuario: " . $Email . "\n" . $Comment;
                $headers = "From: " . $Email;

                if(mail($to, $email_subject, $email_body, $headers))
                    echo '<script type="text/JavaScript">alert("Form submitted")</script>';
                
                else
                {
                
                    echo '<script type="text/JavaScript">alert("Failed to send the form, please try again")</script>';
                    echo '<script type="text/JavaScript">window.history.back();</script>';

                }
                
                echo '<script type="text/JavaScript">window.history.back(); location.reload();</script>';
            
            }

            else
            {

                echo '<script type="text/JavaScript">alert("Please write a valid email address")</script>';
                echo '<script type="text/JavaScript">window.history.back();</script>';

            }

            if(strpos($Email, $Link, '@'))
            {
                $to = $Email; //mail del usuario
                $email_subject = 'Commitment certificate ';
                $email_body = 'You accepted the commitment ' . $Email . "\n" 'The next link will 
                take you to your certificate' . $Link;
                $headers = "Thank you for your time " . $Email;

                if(mail($to, $email_subject, $email_body, $headers))
                    echo '<script type="text/JavaScript">alert("Form submitted")</script>';
                
                else
                {
                
                    echo '<script type="text/JavaScript">alert("Failed to send the form, please try again")</script>';
                    echo '<script type="text/JavaScript">window.history.back();</script>';

                }
                
                echo '<script type="text/JavaScript">window.history.back(); location.reload();</script>';
            
            }

            else
            {

                echo '<script type="text/JavaScript">alert("Please write a valid email address")</script>';
                echo '<script type="text/JavaScript">window.history.back();</script>';

            }
        
        
        }

    }

?>