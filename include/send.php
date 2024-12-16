<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

// Include joinToday.php to access the data
require '../include/joinToday.php'; // Replace 'path/to/joinToday.php' with the actual path to your joinToday.php file

// Check if the form is submitted
if(isset($_POST["send"])){
    $mail = new PHPMailer(true);
    
    // Enable debugging for testing
    // $mail->SMTPDebug = 2; 
    
    // Configure SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'seselimbu98@gmail.com'; // Replace with your Gmail email
    $mail->Password = 'jichanwook98'; // Replace with your Gmail password
    $mail->SMTPSecure = 'tls'; // Use TLS
    $mail->Port = 587; // Gmail SMTP port

    // Set sender information
    $mail->setFrom('seselimbu98@gmail.com', 'Ace Taekwondo & Coaching Services'); // Replace with your name and email

    // Add recipient email address from joinToday.php
    if (isset($email)) {
        $mail->addAddress($email);
    } else {
        echo "<script>alert('Error: Email data not found in joinToday.php.');</script>";
        exit;
    }

    // Set email content using data from joinToday.php
    $mail->isHTML(true);
    $mail->Subject = "New Inquiry from " . $firstName; // Assuming $firstName contains the first name from joinToday.php
    $mail->Body = "First Name: " . $firstName . "<br>" .
                  "Last Name: " . $lastName . "<br>" .
                  "Age: " . $age . "<br>" .
                  "Address: " . $address . "<br>" .
                  "Phone: " . $phone . "<br>" .
                  "Gender: " . $gender; // Assuming $gender contains the gender information from joinToday.php

    try {
        // Send email
        $mail->send();
        echo "<script>alert('Email sent successfully');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Error: {$mail->ErrorInfo}');</script>";
    }
}
?>
