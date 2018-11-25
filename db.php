<?php
$host = "mariadb";
$db = "drupal_lab";
$user = "drupal_lab";
$pass = "drupal_lab";
$charset = "utf8";
$opt = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
$pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass, $opt);