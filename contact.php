<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    if(empty($name)) {
        // $name_error = 'Please provide a name';
        echo '<script>alert("Please provide a name")</script>'; 
    }
    elseif(empty($mailFrom)) {
        // $email_error = 'Please provide an email';
        echo '<script>alert("Please provide an email")</script>'; 
    }
    elseif(empty(message)) {
        // $message_error = 'Please provide a message';
        echo '<script>alert("Please provide a message")</script>'; 
    }
    else {
        $mailTo = "mhernando@gator3044.hostgator.com";
        $headers = "From: Your Portfolio, by ".$mailFrom;
        $txt = "You have recieved an e-mail from ".$name.".\n\n".$message;
        mail($mailTo, $txt, $headers);
    }   
    include('index.php');
    header("Location: index.php?");
}
?>