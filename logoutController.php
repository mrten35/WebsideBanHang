<?php
session_start();
if (isset($_SESSION["txt_username"])) {
    unset($_SESSION);
    session_destroy();
    header("Location: index.php");
    exit();
}
?>