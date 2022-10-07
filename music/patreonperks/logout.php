<?php

$type = "success";
$message = urlencode("Logout Successful!");

if (isset($_COOKIE['patreon_scope'])) {
    unset($_COOKIE['patreon_scope']); 
    setcookie('patreon_scope', null, -1, '/music/');
}
if (isset($_COOKIE['patreon_refesh_token'])) {
    unset($_COOKIE['patreon_refesh_token']); 
    setcookie('patreon_refesh_token', null, -1, '/music/'); 
}
if (isset($_COOKIE['patreon_session_id'])) {
    unset($_COOKIE['patreon_session_id']); 
    setcookie('patreon_session_id', null, -1, '/music/');
}


header("Location: /music/?proudMessage=".$message."&proudType=".$type);
die();

?>