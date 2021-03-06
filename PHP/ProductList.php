<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mom's Favourite Market</title>
    <link rel="shortcut icon" href="../Images/logo.png">

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9cec6e31d9.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/cartStyle.css">
    <link rel="stylesheet" type="text/css" href="../CSS/ProductListStyle.css">

    <!--imports the javascript code-->
    <script src= "../JS/ProductPageButtons.js"></script>
</head>

<body>
    <header>
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="successadmin.php"><img src="../Images/logo.png"><span id="title">Mom's Favourite
                        Market (ADMIN)</span></a></a>
                <!--LINK TO MAIN PAGE-->
                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
                    data-target="#main-navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="ProductList.php" class="nav-link">Product List</a>
                        </li>

                        <li class="nav-item">
                            <a href="backstoreUserAccounts.php" class="nav-link">User List</a>
                        </li>

                        <li class="nav-item">
                            <a href="orderLists.php" class="nav-link">Order List</a>
                        </li>

                        <li class="nav-item">
                            <a href="loginpage2.php" class="nav-link"><i class="far fa-user-circle fa-lg"></i> Sign in</a>
                        </li>

                    </ul>
                </div>
            </nav>

        </header>

    <?php
    //$file = "../data/productList.txt"
    $file = "../data/productList.txt";
    $lines = file($file);
    ?>

<center>

<div id = "ProductList" class="col-md-11">
    <h2 class="text-center" style="color:#334754;">Product List</h2>
    <div class="table-responsive">
    <!--Table of the products-->
    <table class="table" id = "productsTable" border="1">
        <!--First row with the collection-->
        <tr>
            <th colspan="8" class="table-dark" style="background-color:#334754;">All Products</th>

        </tr>
        <!--Second row with buttons-->
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Collection</td>
            <!--The dropdown button for the different categories-->
            <td>

            <div class="dropdown">
                        <button class = "dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         All Products
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="ProductList.php">All products</a>
                          <a class="dropdown-item" href="BakeryProductList.htm">Bakery</a>
                          <a class="dropdown-item" href="ButcheryProductList.php">Butchery</a>
                          <a class="dropdown-item" href="Dairy&EggsProductList.php">Dairy & Eggs</a>
                          <a class="dropdown-item" href="F&VProductList.php">Fruits & Vegetables</a>
                          <a class="dropdown-item" href="FrozenProductList.php">Frozen Food</a>
                          <a class="dropdown-item" href="PantryProductList.php">Pantry</a>
                        </div>
                    </div>

            </td>
           <!--The button to add a product-->
           <td><button type="button"><a href = "AddProductForm.php">Add Product</a></button></td>
           <!--The button to delete all product on the page-->
           <td><input type="button" value="Delete all" onclick="deleteAll(this)"/></td>

        </tr>
        <!--Row for the title of each column-->
        <tr>
            <td> </td>
            <td>Name</td>
            <td>Aisle</td>
            <td>Product Number</td>
            <td>Price</td>
            <td>Inventory</td>
            <td> </td>
            <td> </td>
        </tr>
        <!--Rows for each products-->
        <tr>
            <th><img class = "img-fluid" src = "../Images/<?php echo $lines[12];?>"></img></th>
            <td><?php echo $lines[0];?></td>
            <td><?php echo $lines[1];?></td>
            <td><?php echo $lines[10];?></td>
            <td><?php echo $lines[4];?></td>
            <td><?php echo $lines[11];?></td>
            <!--Button to edit the product-->
            <td><button type="button" onclick="productToEdit(4)"> <a href = "EditProduct.php">Edit</a></button></td>
            <!--Product to delete the product-->
            <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>

        <tr>
            <th><img class = "img-fluid" src = "../Images/1milk4L.png"></img></th>
            <td>1% Milk (4L)</td>
            <td>Dairy & Eggs</td>
            <td>111</td>
            <td>$6.38</td>
            <td>In stock</td>
            <td><button type="button" onclick="productToEdit(5)"> <a href = "EditProduct.php">Edit</a></button></td>
           <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>

        <tr>
            <th><img class = "img-fluid" src = "../Images/2milk1L.png"></img></th>
            <td>2% Milk (1L)</td>
            <td>Dairy & Eggs</td>
            <td>114</td>
            <td>$1.93</td>
            <td>In stock</td>
            <td><button type="button" onclick="productToEdit(6)"> <a href = "EditProduct.php">Edit</a></button></td>
           <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>

        <tr>
            <th><img class = "img-fluid" src = "../Images/2milk4L.png"></img></th>
            <td>2% Milk (4L)</td>
            <td>Dairy & Eggs</td>
            <td>113</td>
            <td>$6.68</td>
            <td>In stock</td>
            <td><button type="button" onclick="productToEdit(7)"> <a href = "EditProduct.php">Edit</a></button></td>
           <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>

        <tr>
            <th><img class = "img-fluid" src = "../Images/flour.png"></img></th>
            <td>All Purpose Flour</td>
            <td>Pantry</td>
            <td>531</td>
            <td>$8.29</td>
            <td>In stock</td>
            <td><button type="button" onclick="productToEdit(20)"> <a href = "EditProduct.php">Edit</a></button></td>
           <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>
        
        <tr>
            <th><img class = "img-fluid" src = "../Images/banana.png"></img></th>
            <td>Banana</td>
            <td>Fruits & Vegetables</td>
            <td>212</td>
            <td>$0.33</td>
            <td>In stock</td>
            <td><button type="button" onclick="productToEdit(10)"> <a href = "EditProduct.php">Edit</a></button></td>
           <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>

        <tr>
            <th><img class = "img-fluid" src = "../Images/pear.png"></img></th>
            <td>Bartlett Pear</td>
            <td>Fruits & Vegetables</td>
            <td>213</td>
            <td>$0.88</td>
            <td>In stock</td>
            <td><button type="button" onclick="productToEdit(33)"> <a href = "EditProduct.php">Edit</a></button></td>
           <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>

        <tr>
            <td><img class = "img-fluid" src = "../Images/yogurtcup.png"></img></td>
            <td>Blueberry Yogurt Pack</td>
            <td>Dairy & Eggs</td>
            <td>133</td>
            <td>$7.49</td>
            <td>In stock</td>
            <td><button type="button" onclick="productToEdit(1)"> <a href = "EditProduct.php">Edit</a></button></td>
           <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>

        <tr>
            <th><img class = "img-fluid" src = "../Images/chickenbreast.png"></img></th>
            <td>Boneless Chicken Breast, 3 Pack</td>
            <td>Butchery</td>
            <td>431</td>
            <td>$10.21</td>
            <td>In stock</td>
            <td><button type="button" onclick="productToEdit(14)"> <a href = "EditProduct.php">Edit</a></button></td>
           <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>

        <tr>
            <th><img class = "img-fluid" src = "../Images/pork.png"></img></th>
            <td>Butterfly Pork Chops, 3 Pack</td>
            <td>Butchery</td>
            <td>413</td>
            <td>$8.59</td>
            <td>In stock</td>
            <td><button type="button" onclick="productToEdit(36)"> <a href = "EditProduct.php">Edit</a></button></td>
           <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>

        <tr>
            <th><img class = "img-fluid" src = "../Images/cannedpeas.png"></img></th>
            <td>Canned Peas</td>
            <td>Pantry</td>
            <td>512</td>
            <td>$1.69</td>
            <td>In stock</td>
            <td><button type="button" onclick="productToEdit(23)"> <a href = "EditProduct.php">Edit</a></button></td>
           <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>

        <tr>
            <th><img class = "img-fluid" src = "../Images/cannedtuna.png"></img></th>
            <td>Canned Tuna Chunks</td>
            <td>Pantry</td>
            <td>513</td>
            <td>$1.49</td>
            <td>In stock</td>
            <td><button type="button" onclick="productToEdit(45)"> <a href = "EditProduct.php">Edit</a></button></td>
           <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>

        <tr>
            <th><img class = "img-fluid" src = "../Images/celery.png"></img></th>
            <td>Celery</td>
            <td>Fruits & Vegetables</td>
            <td>223</td>
            <td>$3.69</td>
            <td>In stock</td>
            <td><button type="button" onclick="productToEdit(12)"> <a href = "EditProduct.php">Edit</a></button></td>
           <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>

        <tr>
            <th><img class = "img-fluid" src = "../Images/cheddarcheese.png"></img></th>
            <td>Cheddar Cheese</td>
            <td>Dairy & Eggs</td>
            <td>132</td>
            <td>$4.49</td>
            <td>In stock</td>
            <td><button type="button" onclick="productToEdit(13)"> <a href = "EditProduct.php">Edit</a></button></td>
           <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>

        <tr>
            <th><img class = "img-fluid" src = "../Images/chocolatechip.png"></img></th>
            <td>Chocolate Chips</td>
            <td>Pantry</td>
            <td>534</td>
            <td>$16.99</td>
            <td>In stock</td>
            <td><button type="button" onclick="productToEdit(15)"> <a href = "EditProduct.php">Edit</a></button></td>
           <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>

        <tr>
            <th><img class = "img-fluid" src = "../Images/duckconfit.png"></img></th>
            <td>Confit Duck Legs, 2 Pack</td>
            <td>Butchery</td>
            <td>433</td>
            <td>$16.99</td>
            <td>In stock</td>
            <td><button type="button"  onclick="productToEdit(19)"> <a href = "EditProduct.php">Edit</a></button></td>
           <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr> 
        
        <tr>
            <th><img class = "img-fluid" src = "../Images/creamofmushroom.png"></img></th>
            <td>Cream Of Mushroom Soup</td>
            <td>Pantry</td>
            <td>522</td>
            <td>$3.29</td>
            <td>In stock</td>
            <td><button type="button" onclick="productToEdit(16)"> <a href = "EditProduct.php">Edit</a></button></td>
            <td><input type="button" value="Delete" onclick="deleteProduct(this)"/></td>
        </tr>
    </table>

    </div>
     <!--Buttons to change the pages-->
    <button type="button">&#8249;</button>
    <button type="button" id="specialButton" ><a href = "ProductList2.php">&#8250;</a></button>
    <br></br>
</div>

<?php fclose($handle);?>

</center> 

 <!--CDN import for header & footer-->
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

</body>
</html>