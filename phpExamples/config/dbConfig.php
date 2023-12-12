<?php
$hn = "localhost";
$un = "student_admin";
$pw = "NjlS5(oF87lE86Yp";
$db = "my_clyde";

$conn = mysqli_connect($hn, $un, $pw, $db);
if (!$conn)
{
    die ("Connection failed: " . mysqli_connect_error());
}