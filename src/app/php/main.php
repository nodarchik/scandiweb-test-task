<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Test Task</title>
</head>

<body>

<header class="header">
    <h1>Product List</h1>
    <a href="product-add.html" class="buttons">ADD</a>

</header>
<main class="main">
    <div class="cards">
            <?php
                $statement = $pdo->prepare('SELECT * FROM orders ORDER BY id DESC');
                $statement -> execute();
                $orders = $statement -> fetchAll(PDO::FETCH_ASSOC); ?>
            <?php foreach ($orders as $i => $order):  ?>
            <div class="card">
                <form method="post" action="delete.html">
                    <input type="hidden" name="id" value="<?php echo $order['id'] ?>">
                    <button type="submit" class="buttons" id="delete-product-btn">Mass Delete</button>
                </form>
                <div> <?php echo $order['sku'] ?> </div>
                <div> <?php echo $order['name'] ?> </div>
                <div> <?php echo $order['price'] . "$" ?> </div>
                <div> <?php echo $order['type'] ?> </div>
            </div>
            <?php endforeach;  ?>
    </div>
</main>
<?php echo $order['id'];?>
<footer class="footer">
    Scandiweb Test assignment
</footer>
<script src="/js/delete.js"></script>
</body>
</html>