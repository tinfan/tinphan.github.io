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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web bán thức ăn </title>
    <link rel="stylesheet" href="public/css/style.css">
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
                <div class="item">  
                    <a href="menu1.php">Menu</a>
                </div>
                <div class="item">
                    <a href="blog.php">Blog</a>
                </div>
                <div class="item">
                    <a href="help.php">Help</a>
                </div>
               
               
            </div>
            <div id="actions">
                <div class="login">
                    <a href="login.php">
                    <img src="public/assets/user.png" alt=""></a>
                </div>
            </div>        
        </div>
        <div id="banner">
            <div class="box-left">
                <h2>
                    <span>PIZZA</span>
                    <br>
                    <span>THƯỢNG HẠNG</span>
                </h2>
                <p>Chuyên cung cấp các món ăn đảm bảo dinh dưỡng
                    hợp vệ sinh đến người dùng,phục vụ người dùng 1 cái
                    hoàn hảo nhất</p>
                <button>Mua ngay</button>
            </div>
            <div class="box-right">
                <img src="public/assets/pizz1.png"  height="400px" alt="">
                <img src="public/assets/pizz2.png"  height="380px" alt="">
                <img src="public/assets/pizz3.png"  height="400px" alt="">
            </div>
            <div class="to-bottom">
                <a href="">
                    <img src="public/assets/to_bottom.png" alt="">
                </a>
            </div>
        </div>
        <div id="wp-products">
            <h2>sản phẩm bán hot hiện nay tại cửa hàng</h2>
            <ul id="list-products">
            <?php foreach ($product as $products) {
            ?>

                <div class="item">
                    <img src="<?php echo $products['image'] ?>" width="260px" height="180px" alt="">
                    <div class="stars">
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                    </div>

                    <div class="name"><?php echo $products['name'] ?></div>
                    <div class="desc"><?php echo $products['description'] ?></div>
                    <div class="price"><?php echo $products['price'] ?></div>
                </div>
                <?php } ?>

                <div class="item">
                    <img src="<?php echo $products['image'] ?>" width="260px" height="180px" alt="">
                    <div class="stars">
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                    </div>

                    <div class="name"><?php echo $products['name'] ?></div>
                    <div class="desc"><?php echo $products['description'] ?></div>
                    <div class="price"><?php echo $products['price'] ?></div>
                </div>


                <div class="item">
                    <img src="<?php echo $products['image'] ?>" width="260px" height="180px" alt="">
                    <div class="stars">
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                    </div>

                    <div class="name"><?php echo $products['name'] ?></div>
                    <div class="desc"><?php echo $products['description'] ?></div>
                    <div class="price"><?php echo $products['price'] ?></div>
                </div>
                <div class="item"> 
                    <img src="<?php echo $products['image'] ?>" width="260px" height="180px" alt="">
                    <div class="stars">
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                    </div>

                    <div class="name"><?php echo $products['name'] ?></div>
                    <div class="desc"><?php echo $products['description'] ?></div>
                    <div class="price"><?php echo $products['price'] ?></div>
                </div>

                <div class="item">
                    <img src="<?php echo $products['image'] ?>" width="260px" height="180px" alt="">
                    <div class="stars">
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                    </div>

                    <div class="name"><?php echo $products['name'] ?></div>
                    <div class="desc"><?php echo $products['description'] ?></div>
                    <div class="price"><?php echo $products['price'] ?></div>
                </div>

                <div class="item">
                    <img src="<?php echo $products['image'] ?>" width="260px" height="180px" alt="">
                    <div class="stars">
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="public/assets/star.png" alt="">
                        </span>
                    </div>

                    <div class="name"><?php echo $products['name'] ?></div>
                    <div class="desc"><?php echo $products['description'] ?></div>
                    <div class="price"><?php echo $products['price'] ?></div>
                </div>
            </ul>
            <div class="list-page">
                <div class="item">
                    <a href=""></a>
                </div>
                <div class="item">
                    <a href=""></a>
                </div>
                <div class="item">
                    <a href=""></a>
                </div>
            </div>
        </div>
        <div class="cart1">
            <a href="menu.php">
            <h2>Shopping Cart</h2>
        </a>
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

        <div id="comment">
            <h2>NHẬN XÉT CỦA KHÁCH HÀNG</h2>
            <div id="comment-body">
                <div class="prev">
                    <a href="#">
                        <img src="public/assets/prev.png" alt="">
                    </a>
                </div>
                <ul id="list-comment">
                    <li class="item">
                        <div class="avatar">
                            <img src="public/assets/andanh.jpg" alt="">

                        </div>
                        <div class="stars">
                            <span>
                                <img src="public/assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="public/assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="public/assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="public/assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="public/assets/star.png" alt="">
                            </span>
                        </div>
                        <div class="name">Nguyễn Rốt</div>

                        <div class="text">
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book.</p>
                        </div>
                    </li>
                    <li class="item">
                        <div class="avatar">
                            <img src="public/assets/comment1.jpg" alt="">

                        </div>
                        <div class="stars">
                            <span>
                                <img src="public/assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="public/assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="public/assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="public/assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="public/assets/star.png" alt="">
                            </span>
                        </div>
                        <div class="name">Gordon Ramsay</div>

                        <div class="text">
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book.</p>
                        </div>
                    </li>
                    <li class="item">
                        <div class="avatar">
                            <img src="public/assets/avatar_1.png" alt="">

                        </div>
                        <div class="stars">
                            <span>
                                <img src="public/assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="public/assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="public/assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="public/assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="public/assets/star.png" alt="">
                            </span>
                        </div>
                        <div class="name">Nguyễn Trần Vi</div>

                        <div class="text">
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book.</p>
                        </div>
                    </li>
                </ul>
                <div class="next">
                    <a href="#">
                        <img src="public/assets/next.png" alt="">
                    </a>
                </div>
            </div>
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
    <script src="public/js/script.js"></script>
    
</body>

</html>