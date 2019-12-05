<?php

//Connection variables
$user = 'root';
$password = '0000';

//Attempt to connect to our DB
$dbConnection = new PDO('mysql:host=localhost;dbname=user_management', $user, $password);