<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$pdo = new PDO('mysql:host=127.0.0.1;dbname=test',"root","toor");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

require_once 'delete.php';
require_once 'insert.php';

$page = $_SERVER["REQUEST_URI"] ?? null;
switch ($page)  {
    case "/":
        require_once('main.php');
    break;
    case "/product-add.html":
        require_once('product-add.php');
    break;
}
