<?php

$con = new mysqli('localhost', 'Mohamed', "123456", "crud-operation");



if (!$con) {
    die(mysqli_error($con));
}
