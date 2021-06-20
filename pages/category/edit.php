<?php
    require_once "../env.php";

    $category = new App\Category();
    $row = $category->edit($_GET['id']);

    if (isset($_POST['submit'])) {
        $category->setId($_POST['id']);
        $category->setName($_POST['name']);
        $category->setKet($_POST['ket']);

        $category->update();

        // header('Location: kategori.php');
    }  
?>
<div class="content">
    <div class="page-title">Kategori</div>
    <div class="box" style="width: 600px">
        <div class="data-title">Edit Data Kategori</div>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo $row['name'] ?>" required>
            </div>

            <div class="form-group">
                <label for="ket">Keterangan</label>
                <textarea name="ket" class="form-control" id="ket" cols="30" rows="10"><?php echo $row['ket'] ?></textarea>
            </div>

            <div style="display: flex; justify-content: space-between; margin-top: 20px">
                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                <a href="kategori.php">
                    <button type="button" class="btn btn-danger">Batal</button>
                </a>
            </div>                        
        </form>
    </div>
</div>
            
        