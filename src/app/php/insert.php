<?php
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    $weight = $_POST['weight'];

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
        $statement = $pdo->prepare('INSERT INTO orders (sku,name,price,size,height,width,length,weight)
               VALUES (:sku,:name,:price,:size,:height,:width,:length,:weight)');
        $statement->bindValue(':sku', $sku);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':size', $size);
        $statement->bindValue(':height', $height);
        $statement->bindValue(':width', $width);
        $statement->bindValue(':length', $length);
        $statement->bindValue(':weight', $weight);

        $statement->execute();

        header("Location:/");
        exit();
    }
}
