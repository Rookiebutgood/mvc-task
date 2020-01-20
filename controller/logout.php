<?php
session_start();
$_SESSION['role'] = 'anonymous';
//session_destroy();
header('Location: /');
?>