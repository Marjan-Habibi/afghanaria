<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fullName'];
    $father = $_POST['fatherName'];
    $tazkira = $_POST['tazkira'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // <email>
    $to = "afghanariaprivateschools4@gmail.com"; 
    $subject = "New Student Registration";
    $message = "Name: $name\nFather's Name: $father\nTazkira: $tazkira\nDOB: $dob\nGender: $gender\nClass: $class\nAddress: $address\nPhone: $phone\nEmail: $email";

    $headers = "From: no-reply@afghanaria.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Registration successful.";
    } else {
        echo "Failed to send.";
    }
}
?>