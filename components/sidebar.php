<div class="sidebar" id="sidebar">
    <ul>
        <li>
            <a href="index.php">
                <i class="fa fa-home sidebar-icon"></i>
                <span class="sidebar-item-text">Dashboard</span> 
                <i class="fas fa-chevron-right chevron-link-icon"></i>
            </a>
        </li>

        <li>
            <a href="index.php?page=album/index">
                <i class="fas fa-tag sidebar-icon"></i>
                <span class="sidebar-item-text">Album</span>
                <i class="fas fa-chevron-right chevron-link-icon"></i> 
            </a>
        </li>
        
        <li>
            <a href="index.php?page=category/index">
                <i class="fas fa-tag sidebar-icon"></i>
                <span class="sidebar-item-text">Category</span>
                <i class="fas fa-chevron-right chevron-link-icon"></i> 
            </a>
        </li>

        <li>
            <a href="index.php?page=photo/index">
                <i class="fas fa-tag sidebar-icon"></i>
                <span class="sidebar-item-text">Photo</span>
                <i class="fas fa-chevron-right chevron-link-icon"></i> 
            </a>
        </li>


        <li>
            <a href="index.php?page=post/index">
                <i class="fas fa-tag sidebar-icon"></i>
                <span class="sidebar-item-text">Post</span>
                <i class="fas fa-chevron-right chevron-link-icon"></i> 
            </a>
        </li>

        <?php
            require_once "../env.php";

            $login = new App\Login();

            if (isset($_POST['submit-login'])) {
                $login->logout();
            }  
        ?>


        <div style="margin-left: 10px">
            <form action="" method="POST" style="display: inline-block">
                <button type="submit" name="submit-login" style="border: 0px; 
                               margin-top: 30px; background-color: 
                               white; border-radius: 5px; height: 30px; 
                               width: 80px">Logout</button>
            </form>
        </div>
    </ul>
</div>