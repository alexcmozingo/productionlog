<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$location = $_POST['location'];
$shift = $_POST['shift'];
$line = $_POST['line'];
$disc = $_POST['disc'];
$plastic = $_POST['plastic'];
$firsts = $_POST['firsts'];
$seconds = $_POST['seconds'];
$regrind = $_POST['regrind'];
$waste = $_POST['waste'];

$dbServername = "localhost";
$dbUsername = "root";
$dbPasswork = "Tuesday1";
$dbName = "productionlog";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPasswork, $dbName);

?>