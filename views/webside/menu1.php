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
    <title>Document</title>
    <link rel="stylesheet" href="public/css/menu1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
</head>
<body>
    <header>
        <div class="nav container">
        <a href="" class="logo">
            <img src="public/assets/logopiz.png" width="150px" height="80px" alt="">
        </a>
        <div id="menu">
            <div class="item">
                <a href="index.php">Home</a>
            </div>
            <div class="item">  
                <a href="menu1.php">Menu</a>
            </div>
            <div class="item">
                <a href="blog.php">Blog</a>
            </div>
            <div class="item">
                <a href="help.php">Help</a>
            </div>
        <i class='bx bxs-cart' id="cart-icon"></i>
        
</div>
    </div>
    </header>
    <!--Shop -->
    <section class="#"></section>
    <section class="shop container">
        
        <div class="section-title">Menu thực đơn của chúng tôi</div>
        <!--Content-->
        <h2>PIZZA</h2>
        <div class="shop-content">
            <!--Box 1-->
            <div class="product-box">
                <a href="details.php?id=1">
                <img src="public/assets/pz1-1.png"  class="product-img">
                <h4 class="product-title">Pizza Thập cẩm</h4>
                <span class="price">$54</span>
            </a>
                <i class='bx bxs-cart add-cart'></i>
            </div>
            <!--Box 2-->
            <div class="product-box">
                <a href="details.php?id=2">
                <img src="public/assets/pz1-2.png" alt="" class="product-img">
                <h4 class="product-title">Pizza Phomai cay</h4>
                <span class="price">$63</span>
            </a>
                <i class='bx bxs-cart add-cart'></i>
            </div>
            <!--Box 3-->
            <!--Box 4-->
            <div class="product-box">
                <a href="details.php?id=3">
                <img src="public/assets/pz1-4.png"  alt="" class="product-img">
                <h4 class="product-title">Pizza Xúc xích</h4>
                <span class="price">$75</span>
            </a>
                <i class='bx bxs-cart add-cart'></i>
            </div>
            <!--Box 5-->
            <div class="product-box">
                <a href="details.php?id=4">
                <img src="public/assets/pz1-5.png" alt="" class="product-img">
                <h4 class="product-title">Pizza Phomai</h4>
                <span class="price">$46</span>
            </a>
                <i class='bx bxs-cart add-cart'></i>
            </div>
            <!--Box 6-->
            <div class="product-box">
                <a href="details.php?id=5">
                <img src="public/assets/pz1-8.png"  alt="" class="product-img">
                <h4 class="product-title">Pizza mozza</h4>
                <span class="price">$65</span>
            </a>
                <i class='bx bxs-cart add-cart'></i>
            </div>
            <!--Box 7-->
            <div class="product-box">
                <a href="details.php?id=6">
                <img src="public/assets/pz1-9.png" alt="" class="product-img">
                <h4 class="product-title">Pizza Mực</h4>
                <span class="price">$55</span>
            </a>
                <i class='bx bxs-cart add-cart'></i>  
            </div>
        </div>
        <section class="#"></section>
        <section class="shop container">
            <div>-----------------------------------------------------------------------------------------------------------------------------------------------</div>
            <!--Content-->
            <h2>Drink</h2>
            <div class="shop-content">
            <!--Box 8-->
                <div class="product-box">
                    <a href="details.php?id=7">
                    <img src="public/assets/drink1.png"  alt="" class="product-img">
                    <h4 class="product-title">Sinh tố dưa hấu</h4>
                    <span class="price">$13</span>
                    </a>
                    <i class='bx bxs-cart add-cart'></i>
                </div>
                <!--Box 9-->
                <div class="product-box">
                    <a href="details.php?id=8">
                    <img src="public/assets/drink2.png"  alt="" class="product-img">
                    <h4 class="product-title">Nước ép cam</h4>
                    <span class="price">$16</span>
                </a>
                    <i class='bx bxs-cart add-cart'></i>
                </div>
                <!--Box 10-->
                <div class="product-box">
                    <a href="details.php?id=9">
                    <img src="public/assets/drink3.png"  alt="" class="product-img">
                    <h4 class="product-title">nước ép táo</h4>
                    <span class="price">$14</span>
                </a>
                    <i class='bx bxs-cart add-cart'></i>
                </div>
                <!--Box 11-->
                <div class="product-box">
                    <a href="details.php?id=10">
                    <img src="public/assets/drink4.png"  alt="" class="product-img">
                    <h4 class="product-title">sinh tố xoài</h4>
                    <span class="price">$20</span>
                </a>
                    <i class='bx bxs-cart add-cart'></i>
                </div>
                <!--Box 12-->
                <div class="product-box">
                    <a href="details.php?id=11">
                    <img src="public/assets/drink5.png"  alt="" class="product-img">
                    <h4 class="product-title">sinh tố dâu</h4>
                    <span class="price">$16</span>
                </a>
                    <i class='bx bxs-cart add-cart'></i>
                </div>
                <!--Box 13-->
                <div class="product-box">
                    <a href="details.php?id=11">
                    <img src="public/assets/drink6.png"  alt="" class="product-img">
                    <h4 class="product-title">Sinh tố mãng cầu</h4>
                    <span class="price">$12</span>
                </a>
                    <i class='bx bxs-cart add-cart'></i>
                </div>
            </div>
    </section>
    <div class="cart">
        <h1 class="cart-title">You Cart</h1>
        <div class="cart-content">
        </div>
     <!-- total -->
     <div class="total">
        <div class="total-tilte">Total</div>
        <div class="total-price">$0</div>
     </div>
     <!-- Buy Button -->
     <button type="button" class="btn-buy">Buy Now</button>
     <!--Cart Close-->
     <i class='bx bx-x' id="close-cart"></i>
     
    </div>
    <div id="saleoff">
            <div class="box-left">
                <h1>
                    <span>GIẢM GIÁ LÊN ĐẾN</span>
                    <span>45%</span>
                </h1>
            </div>
            <div class="box-right"></div>
        </div>
    <div id="footer">
        <div class="box">
            <div class="logo">
                <img src="public/assets/logopiz.png" width="200px" height="100px" alt="">
            </div>
            <p>Cung cấp cho khách hàng sản phẩm chất lượng và đảm bảo cho khách hàng những nguyên liệu và làm ra món ăn tốt nhất</p>
        </div>
        <div class="box">
            <h3>NỘI DUNG</h3>
            <ul class="quick-menu">
                <div class="item">
                    <a href="">Home</a>
                </div>
                <div class="item">
                    <a href="">Menu</a>
                </div>
                <div class="item">
                    <a href="">Blog</a>
                </div>
                <div class="item">
                    <a href="">Help</a>
                </div>
                
            </ul>
        </div>
        <div class="box">
            <h3>LIÊN HỆ</h3>
            Địa chỉ : 50 Nguyễn Huệ - Thành Phố Huế - Tỉnh Thừa Thiên Huế <br>
            Hotline : 0365895654
            <form action="">
                <input type="text" placeholder="Địa chỉ email">
                <button>Nhận tin</button>
            </form>
        </div>
    </div>
</div>
    <script src="public/js/cart.js"></script>
    <script src="public/js/detail.js"></script>
</body>
</html>