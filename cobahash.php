<?php
$passwordku = "bayu99";
$password_hash = password_hash($passwordku, PASSWORD_DEFAULT);
echo $password_hash;

session_start();
session_destroy();
