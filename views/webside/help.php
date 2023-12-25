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
    <title>Cửa hàng Hỗ trợ</title>
    <link rel="stylesheet" href="public/css/help.css">
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
    <header>
        <h1>Cửa hàng Hỗ trợ</h1>
    </header>

    <main>
        <section id="faq">
            <h2>Câu hỏi thường gặp</h2>
            <ul>
                <li>
                    <h3>Q: Cách đặt hàng?</h3>
                    <p>A: Bạn có thể đặt hàng trực tuyến thông qua trang web hoặc liên hệ trực tiếp với cửa hàng chúng tôi.</p>
                </li>
                <!-- Thêm các câu hỏi khác tương tự -->
            </ul>
        </section>

        <section id="contact">
            
            <h2>Liên hệ chúng tôi</h2>
            <p>Hotline : 0365895654</p>
            <p>Email: support@example.com</p>
            <p>Địa chỉ : 50 Nguyễn Huệ - Thành Phố Huế - Tỉnh Thừa Thiên Huế </p>
            
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Cửa hàng Hỗ trợ</p>
    </footer>

    <script src="public/js/help.js"></script>
</body>
</html>
