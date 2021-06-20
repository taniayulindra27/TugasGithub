<!DOCTYPE html>
<html lang="en">
    <?php include "../partials/header_ref.php"; ?>
<body>
    <div id="root">
        <?php include "../components/header.php" ?>
        <div class="main-content">
            <?php include "../components/sidebar.php" ?>
            <?php
                if(isset($_GET['page'])){
                    include '../pages/'. $_GET['page'] . '.php';
                }else{
                    include '../pages/dashboard.php';
                }
            ?>
        </div>
        <?php include "../components/footer.php" ?>
    </div>
    <?php include "../partials/footer_ref.php"; ?>
</body>
</html>