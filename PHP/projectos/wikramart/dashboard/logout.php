<?php
session_start();
session_destroy();
header("Location: ../asset/html/login.html");
exit;
?>
