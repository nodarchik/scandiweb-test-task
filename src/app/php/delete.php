<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=test',"root","toor");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'] ?? null;



$statement = $pdo->prepare('DELETE FROM orders WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();

header("Location:/");
exit();