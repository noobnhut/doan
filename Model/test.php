<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
                      foreach ($b as $x => $val):
                    ?>
                       <div class="feeds">
                <div class="feed">
                    <div class="head">
                    </div>
                    <div class="user">
                        <div class="profile-pic">
                            <img src="../images/<?php  echo $c['location_img'];?>" alt="">
                        </div>

                        <div class="info">
                            <h3><?php 
                               echo $c['name'];
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
                <?php endforeach;?>
            </body>
</html>