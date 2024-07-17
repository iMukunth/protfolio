<?php 

    if(isset($_POST['btn-snt']))
    {
       $UserName = $_POST['uname'];
       $Email = $_POST['mailid'];
       $Msg = $_POST['textmsg'];

       if(empty($UserName) || empty($Email) || empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "mukunthmuraleedharan@gmail.com";

           if(mail($to,$UserName,$Msg,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>