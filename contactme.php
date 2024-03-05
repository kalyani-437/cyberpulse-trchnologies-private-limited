<?php   
//     require("./mailing/mailfunction.php");{
    
//     $name = $_POST["name"];
//     $phone = $_POST['phone'];
//     $email = $_POST["email"];
//     $message = $_POST["message"];

//     // $body = "<ul><li>Name: ".$name."</li><li>Phone: ".$phone."</li><li>Email: ".$email."</li><li>Message: ".$message."</li></ul>";

//     // $status = mailfunction("", "Company", $body); //reciever
//     $to = "your_email@example.com"; // Replace with your email address
//     $subject = "New Contact Form Submission";
//     $body = "Name: $name\n";
//     $body .= "Phone: $phone\n";
//     $body .= "Email: $email\n";
//     $body .= "Message: $message\n";
    
//     $headers = "From: $email";
//     // if($status)
//     if(mail($to, $subject, $body, $headers)) {
//         echo '<center><h1>Thanks! We will contact you soon.</h1></center>';
//     }else {
//         echo '<center><h1>Error sending message! Please try again.</h1></center>';    
//     }
// }  
?>





<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // You can perform further validation here if needed

    // Send the email (example)
    $to = "your_email@example.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";

    // You can customize the headers as needed
    $headers = "From: $name <$email>";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you soon!";
    } else {
        // Email sending failed
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If it's not a POST request, redirect back to the form page
    header("Location: index.html"); // Adjust this accordingly
    exit();
}
?>
