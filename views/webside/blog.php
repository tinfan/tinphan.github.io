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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="public/css/blog.css">
        </head>
        <body>
            <div id="wrapper">
                <div id="header">
                    <a href="" class="logo">
                        <img src="public/assets/logopiz.png" width="300px" height="150px" alt="">
                    </a>
                    <div id="menu">
                        <div class="item">
                            <a href="index.php">Home</a>
                        </div>
                    </div>
                </div>
            </div>    

        <div class="rating-container">
        <h1>Đánh giá nhà hàng</h1>
        
        <div class="stars">
            <input type="radio" id="star5" name="rating" value="5" />
            <label class="star" for="star5">&#9733;</label>
            <input type="radio" id="star4" name="rating" value="4" />
            <label class="star" for="star4">&#9733;</label>
            <input type="radio" id="star3" name="rating" value="3" />
            <label class="star" for="star3">&#9733;</label>
            <input type="radio" id="star2" name="rating" value="2" />
            <label class="star" for="star2">&#9733;</label>
            <input type="radio" id="star1" name="rating" value="1" />
            <label class="star" for="star1">&#9733;</label>
        </div>

        <div id="rating-value">Đánh giá của bạn: <span id="rated-value">0</span></div>
        </div>
        <script src="public/js/blog.js"></script>

        </body>
        </html>
