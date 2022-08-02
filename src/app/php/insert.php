<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $errors = [];
    if (!$sku){
        $errors[]="Product title is required";
    }
    if (!$name){
        $errors[]="Product name is required";
    }
    if (!$price){
        $errors[]="Product price is required";
    }

    if (empty($errors)){
        $statement = $pdo->prepare('INSERT INTO orders (sku,name,price,type)
               VALUES (:sku,:name,:price,:type)');
        $statement->bindValue(':sku', $sku);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':type', $type);

        $statement->execute();

        header("Location:/");
        exit();
    }
}
