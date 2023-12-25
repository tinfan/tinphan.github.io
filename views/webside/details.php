<?php
 include_once "../../dbconnect.php";
 include_once "../../funcitions.php";
 $categories = showAllCategories();
 $products = showAllProducts();
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
   
    <link rel="stylesheet" href="./public/css/details.css">
</head>

<body>
   
    <section id="prodetails" class="section-p1">
        <div class="detail-container" id="product-detail">

        </div>
    </section>
  
    <script src="./public/js/detail.js"></script>
</body>

</html>