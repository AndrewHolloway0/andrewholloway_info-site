<?php

//get ?code
$urlCODE = htmlspecialchars($_GET["code"]);
if($_SERVER['SERVER_NAME'] == "development.andrewholloway.info" || $_SERVER['SERVER_NAME'] == "localhost") {
    $clientID = "8cTqpdX2R801HOisCTqBz69Di4OulIONj6jt8r75HP8fKk_HTTBTbQgNrsYa1alo";
    $clientSecret = "sQ7zxe-6WoAAy_bhwdZ7MkrdS1gKF7vPGO_lgB2Sx0AUTr_Xnl0ibS5iYzw3z9rX";
} else {
    $clientID = "FnpR21JqARz-Fu8WNbaZW5VD3ceGvz32Kc_AaZEboy5RIJ1mAy4bv9wmP12VkOzM";
    $clientSecret = "FnpR21JqARz-Fu8WNbaZW5VD3ceGvz32Kc_AaZEboy5RIJ1mAy4bv9wmP12VkOzM";
}
$redirectURI = "https://" . $_SERVER['SERVER_NAME'] . "/music/patreonperks/";

$url = "https://www.patreon.com/api/oauth2/token?code=$urlCODE&grant_type=authorization_code&client_id=$clientID&client_secret=$clientSecret&redirect_uri=$redirectURI";

$headerss = array("Content-Type: application/x-www-form-urlencoded");

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headerss);
$data = curl_exec($curl);
curl_close($curl);

echo $data;

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

</body>

</html>