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

  <?php include "./component/nav.php"?>
       

    <main>
        <div class="container">

            <div class="left">
            <a class="profile">
                           <?php 
                        
                           if($_SESSION["is_user"]==true)
                           echo '<div class="profile-pic">';
                           echo '<img src="../images/'.$_SESSION["location_img"].'">';
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
                    <a class="menu-item active" href="#">
                        <span><i class="uil uil-user"></i></span>
                        <h3>Thông tin cá nhân</h3>
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
               <?php 
                require("../Model/post_model.php");
                $id_user = $_SESSION["id"];
                $post = new post_model();
                $post_item=$post-> getPostByIdUser($id_user);
                $user=$post->detailUser($id_user);
               
                ?> 
                <div class="contents">
                    <div class="content">
                        <div class="head">
                            <h3>Thông tin cá nhân</h3>
                        </div>
                        <div class="information">
                            <div class="info_space">
                                <div class="avatar">
                                <img style="height: 300px;" src="../images/<?php echo $user["location_img"]?>" alt="">
                                </div>
                            </div>
                            <div class="info_space">
                                <h4 class="info">Họ và tên:</h4>
                                <p class="info_text"><?php echo $user["name"]?></p>
                            </div>
                            <div class="info_space">
                                <h4 class="info">Số điện thoại</h4>
                                <p class="info_text"><?php echo $user["numberphone"]?></p>
                            </div>
                            <div class="info_space">
                           <input type="submit" value="Chỉnh sửa " class="btn btn-primary"> 
                            </div>

                        </div>
                    </div>
                </div>
                   <?php 
                      foreach ($post_item as $x => $val):
                    ?> 
                  <div class="feeds">
                <div class="feed">
                    <div class="head">
                    </div>
                    <div class="user">
                        <div class="profile-pic">
                            <img src="../images/<?php  echo $user['location_img'];?>" alt="">
                        </div>

                        <div class="info">
                            <h3><?php 
                               echo $user['name'];
                            ?></h3>
                            <small>Tân Phú, 15 phút </small>
                        </div>
                        <SPAN class="edit"><i class="uil uil-ellipsis-h"></i></SPAN>
                    </div>
                   
                    <div class="content">
                        <p class="title"><?php echo $val['title']?></p>
                        <p class="written_text"><?php echo $val["written_text"]?></p>
                    </div>
                    <div class="photo">
                        <img src="../images/<?php echo $val["img_location"]?>" alt="">
                   
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
            
                   <?php endforeach;?>
            </div>

            <?php  include "./component/right.php"?>
    </main>

    <script src="index.js"></script>
</body>

</html>