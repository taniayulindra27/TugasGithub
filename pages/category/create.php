<?php
    require_once "../env.php";

    if (isset($_POST['submit'])) {
        $category = new App\Category();
        $category->setName($_POST['name']);
        $category->setKet($_POST['ket']);

        $category->store();

        // header('Location: kategori.php');
    }  
?>
<div class="content">
    <div class="page-title">Kategori</div>
    <div class="box" style="width: 600px">
        <div class="data-title">Tambah Data Post</div>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="ket">Keterangan</label>
                <textarea name="ket" class="form-control" id="ket" cols="30" rows="10"></textarea>
            </div>

            <div style="display: flex; justify-content: space-between; margin-top: 20px">
                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                <a href="index.php?page=album">
                    <button type="button" class="btn btn-danger">Batal</button>
                </a>
            </div>                        
        </form>
    </div>
</div>