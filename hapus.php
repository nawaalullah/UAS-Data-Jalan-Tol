<?php
include 'db.php';
include 'auth.php';
include 'functions.php';

$id = $_GET['id'];
deleteTol($id);
header("Location: index.php");
?>