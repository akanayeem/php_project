<?php
session_start();

include("db.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $num = $_POST['number'];
    $address = $_POST['add'];
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "insert into form(fname, lname, gender, cnum, address, email, pass) values('$firstname', '$lastname', '$gender', '$num', '$address', '$gmail', '$password')";

        mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('successfully register')</script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('please enter some valid information')</script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signup">
        <h1>Signup</h1>
        <h4>It's free and only takes a minute</h4>

        <form method="post">
            <label>First name</label>
            <input type="text" name="fname" required>
            <label>Last name</label>
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>contact</label>
            <input type="tel" name="number" required>
            <label>Address</label>
            <input type="text" name="add" required>
            <label>Email</label>
            <input type="email" name="mail" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input name="" type="submit" value="submit"></input>
        </form>
        <p>By clicking the signup button, you agree to our<br>
            <a href="#">Terms and condition</a> and <a href="#">Privacy policy</a>
        </p>
        <p>Already have an account <a href="login.php">Login here</a></p>
    </div>
</body>
</html>