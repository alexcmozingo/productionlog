<?php

include_once 'includes/dbh.inc.php';

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

    $sql = "INSERT INTO production (date, location, shift, line, firstname, lastname, discmodel, plastic, firsts, seconds, regrind, waste) VALUES ($date, $location, $shift, $line, $fname, $lname, $disc, $plastic, $firsts, $seconds, $regrind, $waste);";

    mysqli_query($conn, $sql)


?>
