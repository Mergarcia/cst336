<?php
include '../Lab5/dbConnection.php';

$conn = getDatabaseConnection("ottermart");

function displayCategories() {
    global $conn;
    
    $sql = "SELECT catID, catName from om_category ORDER BY catName";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchALL(PDO::FETCH_ASSOC);
    //print_r($records); //can be used to view results
    
    foreach ($records as $record) {
        echo "<option value=' " .$record["catID"]."' >" . $record["catName"] . "</option>";
        }
    
    }

function displaySearchResults() {
    global $conn;
    
    if(isset($_GET['searchForm'])) { //checks whether user has submitted the form
        echo "<h3>Products Found: <h3>";
        //Query below prevents SQL Injection
        $namedParameters = array();
        
        $sql = "SELECT * FROM om_product WHERE 1";
        
        $stmt = $conn->prepare($sql);
        $stmt ->execute($namedParameters);
        $records = $stmt->fetchALL(PDO::FETCH_ASSOC);
        
        if(!empty($_GET['product'])) { //checks whether user has typed something in the "Product" text box
            $sql .= " AND productName LIKE :productName";
            $namedParameters[":productName"] = "%" . $_GET['product'] . "%";
        }
        
        
        if(!empty($_GET['description'])) { //checks whether user has typed something in the "Product" text box
            $sql .= " AND productName LIKE :productName";
            $namedParameters[":productName"] = "%" . $_GET['description'] . "%";
        }
        
        if(!empty($_GET['catergory'])) { //checks whether user has selected a category
            $sql .= " AND catId = :categoryId";
            $nameParameters[":categoryId"] = $_GET['category'];
        }
        
        if(!empty($_GET['priceFrom'])) { //checks whether user has typed somthing in the "price From" text box
            $sql .= " AND price >= :priceFrom";
        }
        
        if(!empty($_GET['priceTo'])) {
            $sql .= " AND price <= :priceTo";
            $namedParameters[":priceTo"] = $_GET['priceTo'];
        }
        
         if(isset($_GET['orderBy'])) {
            
            if($_GET['orderBy'] == "price") {
                $sql .= " ORDER BY price";
            } else {
                $sql .=" ORDER BY productName";
            }
        }
        
        
        foreach ($records as $record) {
            
            echo "<a href=\"purchaseHistory.php?productId=".$record["productId"]. "\"> History </a>";
            echo $record["productName"] . " " . $record["productDescription"] . " $ " .
                $record["price"] . "<br /><br />";
        }
        
    }

}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> OtterMart Product Search </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div>
            <h1> OtterMart Product Search </h1>
            <form>
                
                Product: <input type="text" name="product" />
                <br>
                Product Description: <input type="text" name="description" />
                <br>
                Category:
                    <select name="catergory">
                        <option value="">Select One</option>
                        <?=displayCategories()?>
                    </select>
                    
                <br>
                Price: From <input type="text" name="priceFrom" size="7" />
                       To <input type="text" name="priceTo" size="7" />
                <br>
                Order result by:
                <br>
                <input type="radio" name="orderBy" value="price" /> Price <br>
                <input type="radio" name="orderBy" value="name" /> Name
                
                <br /><br />
                <input type='submit' value='search' name='searchForm' />
            </form>
            <br />
        </div>
        <hr>
        <?= displaySearchResults() ?>
    </body>
</html>