<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width= , initial-scale=1.0" />
    <title>404NotFound</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css" />
    <link rel="shortcut icon" href="./images/favicon.ico" />
    <link rel="stylesheet" href="./styles.css" />
</head>

<body>

<?php  include "./component/nav.php"?>
    
    <main>
        <div class="container">

            <div class="left">
                <a class="profile">
                    <div class="profile-pic">
                        <img src="./images/profile-8.jpg">
                    </div>
                    <div class="handle">
                        <h4>NoobNhut</h4>
                        <p class="text-muted">@noobnhut</p>
                    </div>
                </a>
                <div class="sidebar">
                    <a class="menu-item " href="./home.php">
                        <span><i class="uil uil-home"></i></span>
                        <h3>Trang chủ</h3>
                    </a>
                    <a class="menu-item " href="./information.php">
                        <span><i class="uil uil-user"></i></span>
                        <h3>Thông tin cá nhân</h3>
                    </a>
                    <a class="menu-item "  href="./post.php">
                        <span><i class="uil uil-upload-alt"></i></span>
                        <h3>Bài viết</h3>
                    </a>
                    <a class="menu-item "  href="./post_img.php">
                        <span><i class="uil uil-image"></i></span>
                        <h3>Hình ảnh</h3>
                    </a>
                    <a class="menu-item active" href="#">
                        <span><i class="uil uil-video"></i></span>
                        <h3>Video</h3>
                    </a>
                    <a class="menu-item ">
                        <span><i class="uil uil-exit"></i></span>
                        <h3>Đăng xuất</h3>
                    </a>


                </div>
            </div>

            <div class="middle">
                <div class="content_post">
                    <form action="#">
                        <h2>Bài viết</h2>
                        <label for="title">Tên bài viết:</label>
                        <input type="text" class="field" name="title_post" placeholder="Nhập tên bài viết">
                        <label for="title">Đường dẫn:</label>
                        <input type="text" class="field" name="title_post" placeholder="Nhập đường dẫn">
                        <button class="btn">Đăng bài viết</button>
                        <button class="btn">Hủy đăng bài</button>

                    </form>
                </div>

                
            </div>

            <?php  include "./component/right.php"?>
    </main>

    <script src="index.js"></script>
</body>

</html>