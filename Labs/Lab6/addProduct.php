<?php
    
    session_start();
    
    include 'inc/dbConnection.php';
    
    $conn = getDatabaseConnection("ottermart");
    
    function getCategories(){
        global $conn;
        
        $sql = "SELECT catId, catName
                FROM om_category 
                ORDER BY catName";
        
        $statement = $conn->prepare($sql);
        $statement->execute();
        $records = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($records as $record){
            echo "<option value='" . $record["catId"] . "'>" . $record['catName'] . " </option>";
        }
    }
    
    if(isset($_GET['submitProduct'])){
        $productName = $_GET['productName'];
        $productDescription = $_GET['productDescription'];
        $productImage = $_GET['productImage'];
        $productPrice = $_GET['price'];
        $catId = $_GET['catId'];
        
        $sql = "INSERT INTO om_product
        ( productName, productDescription, productImage, price, catId)
        VALUES ( :productName, :productDescription, :productImage, :price, :catId)";
        
        $np = array();
        $np[':productName'] = $productName;
        $np[':productDescription'] = $productDescription;
        $np[':productImage'] = $productImage;
        $np[':price'] = $productPrice;
        $np[':catId'] = $catId;
        
        $stmt = $conn->prepare($sql);
        $stmt->execute($np);
    }
?><!DOCTYPE html>

<html>
    <head>
        <title>Add Product</title>
        <style>
             @import url("css/styles.css");
        </style>
     
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body id="addProduct">
        <form>
            <strong>Product name</strong> <input type="text" class="form-control" name="productName"><br/>
            <strong>Description</strong> <textarea name="productDescription" class="form-control" cols = 50 rows = 4></textarea></br>
            <strong>Price</strong> <input type="text" class="form-control" name="price"></br>
            <strong>Category</strong> <select name="catId" class="form-control">
                <option value="">Select One</option>
                <?php getCategories(); ?>
            </select><br/>
            <strong>Set Image URL</strong> <input type="text" name="productImage" class="form-control"><br/>
            <input type="submit" name="submitProduct" class='btn btn-primary' value="Add Product">
        </form>
    </body>
</html>