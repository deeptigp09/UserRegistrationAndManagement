<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='signupforms';

$con=mysqli_connect( $HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

IF(!$con)
{die(mysqli_error($con));}
?>