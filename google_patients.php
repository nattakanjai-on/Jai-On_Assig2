<?php
    session_start();

    //Check if there's an access token saved in sessions
    if (!isset($_SESSION['access_token'])) {
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

            echo '<iframe width="467" height="349" src="https://www.youtube.com/embed/MsXlZ_phGNY?list=PLnw6sBdxNnJ1VFcpkH5_OU9jwxoJ9qink" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            echo '<iframe width="467" height="349" src="https://www.youtube.com/embed/wkDiOCIX_xA?list=PLnw6sBdxNnJ1VFcpkH5_OU9jwxoJ9qink" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            echo '<iframe width="467" height="349" src="https://www.youtube.com/embed/Ez2GeaMa4c8?list=PLnw6sBdxNnJ1VFcpkH5_OU9jwxoJ9qink" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            echo '<iframe width="467" height="349" src="https://www.youtube.com/embed/ZaVDs5DPnsA?list=PLnw6sBdxNnJ1VFcpkH5_OU9jwxoJ9qink" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            echo '<iframe width="467" height="349" src="https://www.youtube.com/embed/qo7kXKgo2AE?list=PLnw6sBdxNnJ1VFcpkH5_OU9jwxoJ9qink" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            echo '<iframe width="467" height="349" src="https://www.youtube.com/embed/effXAxgxXb0?list=PLnw6sBdxNnJ1VFcpkH5_OU9jwxoJ9qink" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

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