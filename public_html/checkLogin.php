<?php

if (session_id() === "") {
    session_start();
}

if (!isset($_SESSION['authenticatedUser'])) {

    header('Location: login.php');
    exit;

}
?>

