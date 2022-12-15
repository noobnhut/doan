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
<style>

main{
    margin-top:5rem ;
}
form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
    width: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

</style>
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
               
               <?php 
                require("../Model/post_model.php");
                $id_user = $_SESSION["id"];
                $post = new post_model();
                $post_item=$post-> getPostByIdUser($id_user);
                $user=$post->detailUser($id_user);
               
                ?> 
                <div class="contents">
                    <div class="content">
                        
                         <div class="information">
                            <div class="info_space">
                                <form action="../Controller/user.php" method="POST" enctype="multipart/form-data">
                            <h1>Chỉnh sửa thông tin cá nhân</h1>
                            <input type="text" placeholder="Tên tài khoản" name="id_user" value="<?php echo $id_user?>" />
                            <input type="text" placeholder="Tên tài khoản" name="edit_user_acc" value="<?php echo $user['user_acc']?>" />
                            <input type="text" placeholder="Họ và tên" name="edit_username" value="<?php echo $user['name']?>" />
                            <input type="text" placeholder="Số điện thoại" name="edit_numberphone"value="<?php echo $user['numberphone']?>"/>
                            <input type="text" placeholder="Mật khẩu" name="edit_password"value="<?php echo $user['password']?>"  />
                            <input type="text" name="img_old" value="<?php echo $user['location_img']?>">
                            <input type="file" name="img" accept="image/*" >
                            <input type="submit" name="edit" value="Lưu chỉnh sửa"></input>
                        </form>
                            </div>
                            
                         </div>
                        
                    </div>
                </div>
             
                 
            </div>

            <?php  include "./component/right.php"?>
</div>
    </main>

    <script src="index.js"></script>
</body>

</html>