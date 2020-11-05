<?php
    session_start();

    //Check if there's an access token saved in sessions
    if (!isset($_SESSION['twitter_access_token'])) {

        //If not, send the user to the login page
        header('Location: login.php');
        exit();
    }

     //Check if there's an email saved in session "email"
     if (isset($_SESSION['email'])) {

        $emailData = $_SESSION['email'];

        //Connect to the database
        $connection=mysqli_connect("localhost", "root", "root", "pd_assign2");

        //Get emailinfo from the User table in database 
        $dbuserinfo=mysqli_query($connection, "SELECT * FROM User WHERE email='" .$emailData. "'");
        
        //Number of rows in email query
        $emailrows=mysqli_num_rows($dbuserinfo);

        //Check if $emailrows is bigger than 0
        if ($emailrows>0) {

            //If the emaiData matches DB = List of patients 

        } else {
            //If the user's email doesn't match the email in the database - send the user to the login page
            header('Location: login.php');
            exit();
        }

     }   

    //If there's a session - Destroy
     if(isset($_SESSION)) {
        session_destroy();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Nattakan Jai-On">
    <link rel="stylesheet" href="style_patient.css">
    <title>Assignment 2</title>
</head>
<body>
    <div class="wrapper">
    <?php
    //welcome the physician if they get access to log in and present information for the user
    echo "<br> Welcome Physician! <br>";
    echo "You're email is: " . $_SESSION['email'] . ".<br><brb>";
    echo "<br>Click on your patient(s) name below to view their files and  activity information:<br><br>";
    echo "<a href='http://localhost:8888/patient1.php'> Patient 1: Name<br>";
    ?>
    </div>
    </body>
</html>


