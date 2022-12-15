<nav>
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
                  
                    <div class="profile-pic">
                    <?php 
                           session_start();
                             
                           include_once "../Model/user_model.php";
                           $id= $_SESSION['id'];
                           $user = new user_model();
                           $value=$user->detailUser($id);
                           if($_SESSION["is_user"]==true)
                           echo '<img src="../images/user/'.$value["location_img"].'">';

                            ?>
                    </div>
                </div>
            </div>
      </nav>