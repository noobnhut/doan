<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width= , initial-scale=1.0" />
    <title>404NotFound</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css"
    />
    <link
      rel="shortcut icon"
      href="./images/favicon.ico"
    />
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <body>

     <?php 
     include "./nav.php"?>
            <div class="container">
                <h2 class="logo">404NotFound</h2>
                <div class="search-bar">
                    <i class="uil uil-search"></i>
                    <input
                    type="search"
                    placeholder="Tìm kiếm gì đó nào ......."
                    />
                </div>
                <div class="create">
                    <label class="btn btn-primary" for="">Đăng bài</label>
                    <div class="profile-pic">
                        <img src="images/profile-8.jpg" alt="pic 1" />
                    </div>
                </div>
            </div>
      </nav>

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
                    <a class="menu-item active">
                      <span><i class="uil uil-home"></i></span> <h3>Trang chủ</h3>
                    </a>
                    <a class="menu-item " href="./information.html">
                      <span><i class="uil uil-user"></i></span> <h3>Thông tin cá nhân</h3>
                    </a>
                    <a class="menu-item " href="./post.html">
                        <span><i class="uil uil-upload-alt"></i></span> <h3>Bài viết</h3>
                      </a>
                      <a class="menu-item "href="./post_img.html">
                        <span><i class="uil uil-image"></i></span> <h3>Hình ảnh</h3>
                      </a>
                      <a class="menu-item "href="./post_video.html">
                        <span><i class="uil uil-video"></i></span> <h3>Video</h3>
                      </a>
                    <a class="menu-item ">
                      <span><i class="uil uil-exit"></i></span> <h3>Đăng xuất</h3>
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
                             </div >
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
                            <span class="hash-tag">#lifestyle</span></p>
                         </div>
                         <div class="comments text-muted">1 tỷ bình luận</div>
                         <input type="text" placeholder="Nhập nội dung văn bản ?" id="create-post" autocomplete="off">
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
                             </div >
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
                            <span class="hash-tag">#lifestyle</span></p>
                         </div>
                         <div class="comments text-muted">1 tỷ bình luận</div>
                         <input type="text" placeholder="Nhập nội dung văn bản ?" id="create-post" autocomplete="off">
                         
                    </div>
                
                   
                </div>
              </div>
              
            <?php include "./right.php"?>
                  <div class="messages">
                    <div class="heading">
                        <h4>Thông tin ứng dụng</h4>
                    </div>
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/item_up2.png">
                        </div>
                        <div class="message-body">
                            <h5>@noobnhut</h5>
                            <p class="text-muted">Hãy tải lên một điều gì đó đi nào</p>
                        </div>
                    </div>                             
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/item_up.png">
                        </div>
                        <div class="message-body">
                            <h5>Thuộc về 404NotFound</h5>
                            <p class="text-muted">Hãy tải lên một điều gì đó đi nào</p>
                        </div>
                    </div>  
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/item_up1.png">
                        </div>
                        <div class="message-body">
                            <h5>Nơi giao lưu với tất cả mọi người trên mạng xã hội</h5>
                            <p class="text-muted">Hãy tải lên một điều gì đó đi nào</p>
                        </div>
                    </div>                                                                     
                </div>
      
              </div>
          </div>
      </main>

        <script src="index.js"></script>
  </body>
  
</html>