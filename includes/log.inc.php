<?php

include_once 'includes/dbh.inc.php';

    $sql = "INSERT INTO production (date, location, shift, line, firstname, lastname, discmodel, plastic, firsts, seconds, regrind, waste) VALUES ($date, $location, $shift, $line, $fname, $lname, $disc, $plastic, $firsts, $seconds, $regrind, $waste);";

    mysqli_query($conn, $sql)


?>
