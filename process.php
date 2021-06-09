<?php 

    if(isset($_POST['btn-send']))
    {
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($Email) || empty($Subject) || empty($Msg))
       {
           echo "alert('error')";
           header("location:aboutUsPage.php");
       }
       else
       {
           $to = "atilioinc@gmail.com";

           if(mail($Email,$Subject,$Msg,'From : '.$to))
           {
                echo "alert('sucess')";
                header("location:aboutUsPage.php");
           }
       }
    }
    else
    {
        echo "alert('error')";
        header("location:aboutUsPage.php");
    }
