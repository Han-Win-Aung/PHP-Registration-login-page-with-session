<?php
session_start();
unset($_SESSION['em']);
header('location:index.php');
?>