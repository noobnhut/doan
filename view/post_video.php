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

    <?php include "./component/nav.php" ?>

    <main>
        <div class="container">

            <div class="left">
                <a class="profile">
                    <?php
                    include_once "../Model/user_model.php";
                    if ($_SESSION["is_user"] == true)
                        echo '<div class="profile-pic">';

                    $id = $_SESSION['id'];
                    $user = new user_model();
                    $value = $user->detailUser($id);
                    echo '<img src="../images/user/' . $value["location_img"] . '">';
                    echo '</div>';
                    echo ' <div class="handle">';
                    echo "<h4>" . $value["name"] . "</h4>";
                    echo "<p>@" . $value["user_acc"] . "</p>";

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

                <a class="menu-item " href="./post_img.php">
                    <span><i class="uil uil-image"></i></span>
                    <h3>Hình ảnh</h3>
                </a>
                <a class="menu-item active" href="#">
                    <span><i class="uil uil-video"></i></span>
                    <h3>Video</h3>
                </a>
                <a class="menu-item" href="../Controller/logout.php">

                    <span><i class="uil uil-exit"></i></span>
                    <h3>Đăng xuất</h3>
                </a>


            </div>
        </div>

        <div class="middle">
            <div class="content_post">
                <form action="../Controller/post.php" method="POST" enctype="multipart/form-data">
                    <h2>Bài viết</h2>
                    <label for="title">Tên bài viết:</label>
                    <input type="text" class="field" name="title" placeholder="Nhập tên bài viết">
                    <label for="title">Nội dung bài viết</label>
                    <textarea placeholder="Nhập nội dung bài đăng" class="field" name="written_text"></textarea>
                    <label for="title">Tải ảnh lên:</label>
                    <input type="file" name="img_location" id="file" accept="video/*" hidden>
                    <div class="img-area" data-img="">
                        <i class='icon uil uil-upload'></i>
                        <p>Chọn video tải lên nào </p>

                        <label name="up_img" class="select-image">Chọn video nào</label>
                    </div>
                    <button name="up_post" class="btn">Đăng bài viết</button>
                </form>
            </div>


        </div>

        <?php include "./component/right.php" ?>
    </main>

    <script>
        const selectImage = document.querySelector('.select-image');
        const inputFile = document.querySelector('#file');
        const imgArea = document.querySelector('.img-area');

        selectImage.addEventListener('click', function() {
            inputFile.click();
        });

        inputFile.addEventListener('change', function() {
            const image = this.files[0]
            if (image.size < 20000000000000) {
                const reader = new FileReader();
                reader.onload = () => {
                    const allImg = imgArea.querySelectorAll('video');
                    allImg.forEach(item => item.remove());
                    const imgUrl = reader.result;
                    const img = document.createElement('video');
                    img.src = imgUrl;
                    imgArea.appendChild(img);
                    imgArea.classList.add('active');
                    imgArea.dataset.img = image.name;
                }
                reader.readAsDataURL(image);
            } else {
                alert("Image size more than 2MB");
            }
        });
    </script>
</body>

</html>