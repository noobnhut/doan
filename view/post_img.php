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
    <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>

<?php  include "./component/nav.php"?>
       

    <main>
        <div class="container">

            <div class="left">
            <a class="profile">
                           <?php 
                          
                           if($_SESSION["is_user"]==true)
                           echo '<div class="profile-pic">';
                           echo '<img src="./images/'.$_SESSION["location_img"].'">';
                           echo '</div>';
                           echo ' <div class="handle">';                     
                              echo "<h4>" . $_SESSION["username"] . "</h4>";
                              echo "<p>@" . $_SESSION["user_acc"] . "</p>";

                            ?>
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
               
                    <a class="menu-item active " href="#">
                        <span><i class="uil uil-image"></i></span>
                        <h3>Hình ảnh</h3>
                    </a>
                    <a class="menu-item "  href="./post_video.php">
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
                        <label for="title">Nội dung bài viết</label>
                        <textarea placeholder="Nhập nội dung bài đăng" class="field" name="content_post"></textarea>
                        <label for="title">Tải ảnh lên:</label>
                        <input type="file" id="file" accept="image/*" hidden>
                        <div class="img-area" data-img="">
                            <i class='icon uil uil-upload'></i>
                            <p>Chọn ảnh tải lên nào</p>
                        
                        <button class="select-image">Chọn ảnh nào</button>
                       </div>
                        <button class="btn">Đăng bài viết</button>
                        <button class="btn">Hủy đăng bài</button>

                    </form>
                </div>

                
            </div>

            <?php  include "./component/right.php"?>
        </div>
    </main>

    <script src="index.js"></script>
</body>

</html>