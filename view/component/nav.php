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
                           if($_SESSION["is_user"]==true)
                           echo '<img src="./images/'.$_SESSION["location_img"].'">';

                            ?>
                    </div>
                </div>
            </div>
      </nav>