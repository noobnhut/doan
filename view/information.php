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

  <?php include "./component/nav.php"?>
       

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
                    <a class="menu-item active" href="#">
                        <span><i class="uil uil-user"></i></span>
                        <h3>Thông tin cá nhân</h3>
                    </a>
                    <a class="menu-item " href="./post.php">
                        <span><i class="uil uil-upload-alt"></i></span>
                        <h3>Bài viết</h3>
                    </a>
                    <a class="menu-item "  href="./post_img.php">
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


                <form class="create-post">
                    <div class="profile-pic">
                        <img src="images/profile-8.jpg" alt="">
                    </div>
                    <input type="text" placeholder="Nhập nội dung văn bản ?" id="create-post" autocomplete="off">
                    <input type="submit" value="Đăng bài" class="btn btn-primary">
                </form>

                <div class="contents">

                    <div class="content">
                        <div class="head">
                            <h3>Thông tin cá nhân</h3>
                        </div>
                        <div class="information">
                            <div class="info_space">
                                <div class="avatar">
                                <img src="images/profile-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="info_space">
                                <h4 class="info">Họ và tên:</h4>
                                <p class="info_text">Nguyễn Minh Nhựt</p>
                            </div>
                            <div class="info_space">
                                <h4 class="info">Email:</h4>
                                <p class="info_text">nguyen.nhut.99.2018@gmail.com</p>
                            </div>
                            <div class="info_space">
                                <h4 class="info">Số điện thoại:</h4>
                                <p class="info_text">0929518557</p>
                            </div>
                            <div class="info_space">
                           <input type="submit" value="Chỉnh sửa " class="btn btn-primary"> 
                            </div>

                        </div>
                    </div>


                </div>
                   <div class="feeds">
                    <div class="feed">
                        <div class="head"><h2>Danh sách bài đăng</h2></div>
                    </div>
                   </div>
                <div class="feeds">
                    <div class="feed">
                        <div class="head">

                        </div>
                        <div class="user">
                            <div class="profile-pic">
                                <img src="images/profile-2.jpg" alt="">
                            </div>
                            <div class="info">
                                <h3>Vũ Cao Phi</h3>
                                <small>Tân Phú, 15 phút </small>
                            </div>
                            <SPAN class="edit"><i class="uil uil-ellipsis-h"></i></SPAN>
                        </div>

                        <div class="photo">
                            <img src="images/feed-1.jpg" alt="">
                        </div>

                        <div class="action-button">
                            <div class="interaction-button">
                                <span><i class="uil uil-thumbs-up"></i></span>
                                <span><i class="uil uil-comment"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil uil-share"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <p>Được thích tận 1 tỷ người</p>
                        </div>

                        <div class="caption">
                            <p><b>Hà Tấn Luân</b> Wibu mãi đỉnh
                                <span class="hash-tag">#lifestyle</span>
                            </p>
                        </div>
                        <div class="comments text-muted">1 tỷ bình luận</div>
                        <input type="text" placeholder="Nhập nội dung văn bản ?" id="create-post" autocomplete="off">

                    </div>


                </div>
            </div>

            <?php  include "./component/right.php"?>
    </main>

    <script src="index.js"></script>
</body>

</html>