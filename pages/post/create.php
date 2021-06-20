<?php
    require_once "../env.php";

    $category = new App\Category();
    $categories = $category->getCategory();

    if (isset($_POST['submit'])) {
        $post = new App\Post();
        $post->setDate($_POST['date']);
        $post->setSlug($_POST['slug']);
        $post->setTitle($_POST['title']);
        $post->setCat_id($_POST['cat_id']);

        $post->store();

        // header('Location: kategori.php');
    }  
?>
<div class="content">
    <div class="page-title">Post</div>
    <div class="box" style="width: 600px">
        <div class="data-title">Tambah Data Post</div>
        <form action="" method="POST">
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" id="slug" name="slug" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="ket">Keterangan</label>
                <textarea name="ket" class="form-control" id="ket" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="cat_id">Category</label>
                <select name="cat_id" id="cat_id" class="form-control">
                    <option value="">Silahkan Pilih</option>
                    <?php foreach ($categories as $category) { ?>
                        <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                    <?php } ?>
                </select>
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