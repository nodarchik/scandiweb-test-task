<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Test Task</title>
</head>

<body>

<header class="header">
    <h1>Product List</h1>
    <a href="product-add.html" class="buttons">ADD</a>
    <button class="buttons" id="delete-product-btn" formaction="massDelete()">Mass Delete</button>
</header>

<main class="main">
    <div class="cards">
            <?php
                $statement = $pdo->prepare('SELECT * FROM orders ORDER BY id DESC');
                $statement -> execute();
                $orders = $statement -> fetchAll(PDO::FETCH_ASSOC);
                foreach ($orders as $i => $order):  ?>
            <div class="card">
                <input class="delete-checkbox" type="checkbox"<?php $order['id']?> >
                <div> <?php echo $order['sku'] ?> </div>
                <div> <?php echo $order['name'] ?> </div>
                <div> <?php echo $order['price'] . "$" ?> </div>
                <div> <?php echo $order['type'] ?> </div>
            </div>
            <?php endforeach;  ?>
    </div>
</main>

<footer class="footer">
    Scandiweb Test assignment
</footer>

</body>
</html>