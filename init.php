<?php
$db = mysqli_connect('LOCALHOST','root','','tabokdb');
if(mysqli_connect_errno()) {
    echo "Connection to the database was unestablished.". mysqli_connect_error();
    die();
}