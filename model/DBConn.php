<?php
//connect to mysql
$mysqli = new mysqli('localhost', 'assignment_1', '1', 'assignment_1');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
