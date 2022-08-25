<?php
$id = $_POST['id'] ?? null;

$statement = $pdo->prepare('DELETE FROM orders WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();

header("Location:/");
exit();