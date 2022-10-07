<?php

//get ?code
$loginrequired = true;

if (!isset($_GET["code"]) || isset($_COOKIE["patreon_refesh_token"]) && isset($_COOKIE["patreon_session_id"]) && isset($_COOKIE["patreon_scope"])) {
    $loginrequired = false;
} else {
    $urlCODE = htmlspecialchars($_GET["code"]);
    if($_SERVER['SERVER_NAME'] == "development.andrewholloway.info" || $_SERVER['SERVER_NAME'] == "localhost") {
        $clientID = "8cTqpdX2R801HOisCTqBz69Di4OulIONj6jt8r75HP8fKk_HTTBTbQgNrsYa1alo";
        $clientSecret = "sQ7zxe-6WoAAy_bhwdZ7MkrdS1gKF7vPGO_lgB2Sx0AUTr_Xnl0ibS5iYzw3z9rX";
    } else {
        $clientID = "FnpR21JqARz-Fu8WNbaZW5VD3ceGvz32Kc_AaZEboy5RIJ1mAy4bv9wmP12VkOzM";
        $clientSecret = "FnpR21JqARz-Fu8WNbaZW5VD3ceGvz32Kc_AaZEboy5RIJ1mAy4bv9wmP12VkOzM";
    }
    $redirectURI = "http://" . $_SERVER['SERVER_NAME'] . "/music/patreonperks/";

    $url = "https://www.patreon.com/api/oauth2/token?code=$urlCODE&grant_type=authorization_code&client_id=$clientID&client_secret=$clientSecret&redirect_uri=$redirectURI";

    $headerss = array("Content-Type: application/x-www-form-urlencoded");

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headerss);
    $data = curl_exec($curl);
    curl_close($curl);

    $data2 = json_decode($data,false);

    if(!isset($data2->error)) {
        setcookie(
            "patreon_session_id",
            $data2->access_token,
            time() + $data2->expires_in,
            "/"
        );
        setcookie(
            "patreon_refesh_token",
            $data2->refresh_token,
            time() + $data2->expires_in,
            "/"
        );
        setcookie(
            "patreon_scope",
            $data2->scope,
            time() + $data2->expires_in,
            "/"
        );
        $loginrequired = false;
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Patreon Perks | Andrew Holloway Music</title>
    <meta name="description" content="Patreon Perks page">
    <meta name="keywords" content="Portfolio, Music">
    <meta name="author" content="Andrew Holloway">
    <meta name="viewport" content="width=device-width,user-scalable=no" />
    <link rel="icon" href="/favicon.png?v=0001" />
    <link rel="stylesheet" href="/hamburgers.css">
    <link rel="stylesheet" href="/main.css">
    <link rel="stylesheet" href="patreon.css">
</head>

<body>
    <?php
    
        echo $loginrequired;
        if($loginrequired === true) {
            echo "Please go to patreon to login and confirm membership!<br>";
            echo '<a href="https://www.patreon.com/oauth2/authorize?response_type=code&client_id=8cTqpdX2R801HOisCTqBz69Di4OulIONj6jt8r75HP8fKk_HTTBTbQgNrsYa1alo&redirect_uri=http://localhost/music/patreonperks/">Login to access content!</a>';
        } elseif ($loginrequired === false) {
            echo "You're Logged in!";
        } else {
            echo "there was an error, please login";
        }
    ?>
    <p>dev - dev - dev</p>
</body>

</html>