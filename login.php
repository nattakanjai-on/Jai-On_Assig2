<?php

if(isset($_SESSION)) {
    session_destroy();
}
if(!isset($_SESSION)) {
    session_start();
}

require_once "google_config.php";
$google_url = $g_client->createAuthUrl();

include 'twitter_callback.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Nattakan Jai-On">
    <link rel="stylesheet" href="style.css">
    <title>Assignment 2</title>
</head>
<body>
    <div class="wrapper">
    <h1>LOG IN AS A:</h1><br>
    <form >

    Patient via: <input type="button" onclick="window.location = '<?php echo $google_url ?>';" value="Google"><br><br>
    Physician via: <input type="button" onclick="window.location = '<?php echo $url ?>';" value="Twitter"><br><br>
    </form>

    <?php
    echo "Researcher via: <input type='submit' onclick=window.location.href='https://github.com/login/oauth/authorize?client_id=1ebffdaa62744949dbf3&scope=user:email' value='GitHub'/><br/><br/>";
    ?>

    </div>
    </body>
</html>

