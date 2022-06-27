<?php
// if(isset($_POST['submit'])) {
    // print_r($_POST);
    // die;
    $email_to = "sansp0125@gmail.com";       

    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $email_subject = "CONTACT FORM: ".$_POST['subject']; // required
    $message = $_POST['message']; // required
   
    // create email content
    $email_content = "From:"." ".$name."\n"."Email:"." ".$email_from."\n"."Message:"." ".$message; 
    mail($email_to, $email_subject, $email_content);
// }
?>