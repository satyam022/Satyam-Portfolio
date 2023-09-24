<?php
    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST")
    {
    $name=$_POST['name'];
    $message=$_POST['message'];
    $email=$_POST['mail'];
    $to="satyam99.indian@gmail.com";
    $txt="Name:-".$name."\n"."Mail:-".$email."\n"."Message:- ".$message;
    if(mail($to,"MAHARSHI DAYANAND UNIVERSITY",$txt,"From:$email")) {
    echo "<script>alert('Successfully Message sent')</script>";
    echo '<script>window.location.href="https://satyamsharma09.github.io/satyam-portfolio";</script>';
    }else{
    echo "<script>alert('Query Failed')</script>";
    }
}
?>  