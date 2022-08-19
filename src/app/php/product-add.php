<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Product Page</title>
</head>
<body>
<form method="post" action="/insert">
    <header class="header">
        <h1>Product Add</h1>
        <button type="submit" name="submit" class="buttons">Save</button>
        <a href="/" type="button" class="buttons">Cancel</a>
    </header>
    <main class="main">
        <div id="sku" class="form-grid">
            <div>SKU</div>
            <div><input type="text" name="sku" placeholder="Sku"></div>
        </div>
        <div id="name" class="form-grid">
            <div>Name</div>
            <div><input type="text" name="name" placeholder="Name"></div>
        </div>
        <div id="price" class="form-grid">
            <div>Price($)</div>
            <div><input type="text" name="price" placeholder="Price"></div>
        </div>
        <div class="form-grid" >
            <div>Type Switcher</div>
            <div>
                  <select  id="productType" name="type" onchange="getSelectedValue()">
                        <option value="DVD" id="dvdType">DVD</option>
                        <option value="Furniture" id="furnitureType">Furniture</option>
                        <option value="Book" id="bookType">Book</option>
                  </select>
            </div>
        </div>

        <div class="form-grid" id="size">
            <div>Size(MB)</div>
            <div><input type="text" name="size" placeholder="Size"></div>
        </div>
        <div class="form-grid" id="height">
            <div>Height(CM)</div>
            <div><input type="text" name="height" placeholder="Height"></div>
        </div>
        <div class="form-grid" id="width">
            <div>Width(CM)</div>
            <div><input type="text" name="width" placeholder="Width"></div>
        </div>
        <div class="form-grid" id="length">
            <div>Length(CM)</div>
            <div><input type="text" name="length" placeholder="Length"></div>
        </div>
        <div class="form-grid" id="weight">
            <div>Weight(KG)</div>
            <div><input type="text" name="weight" placeholder="Weight"></div>
        </div>
        <div class="errors">
            <?php if (!empty($errors)){foreach ($errors as $error):  ?>
                <div><?php echo $error ?></div>
            <?php  endforeach; }?>
        </div>

    </main>
</form>

<footer class="footer">
    Scandiweb Test assignment
</footer>

<script src="/js/index.js"></script>

</body>
</html>
