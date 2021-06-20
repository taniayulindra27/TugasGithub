<?php
    require_once "../env.php";

    $category = new App\Category();
    $categories = $category->getCategory();

    $post = new App\Post();
    $row = $post->edit($_GET['id']);

    if (isset($_POST['submit'])) {
        $post->setId($_POST['id']);
        $post->setDate($_POST['date']);
        $post->setSlug($_POST['slug']);
        $post->setTitle($_POST['title']);
        $post->setCat_id($_POST['cat_id']);

        $post->update();

        // header('Location: kategori.php');
    }  
?>
<div class="content">
    <div class="page-title">Post</div>
    <div class="box" style="width: 600px">
        <div class="data-title">Edit Data Post</div>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" class="form-control" value="<?php echo $row['date'] ?>" required>
            </div>
            
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" id="slug" name="slug" class="form-control" value="<?php echo $row['slug'] ?>" required>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="<?php echo $row['title'] ?>" required>
            </div>

            <div class="form-group">
                <label for="ket">Keterangan</label>
                <textarea name="ket" class="form-control" id="ket" cols="30" rows="10"><?php echo $row['ket'] ?></textarea>
            </div>

            <div class="form-group">
                <label for="cat_id">Category</label>
                <select name="cat_id" id="cat_id" class="form-control">
                    <option value="">Silahkan Pilih</option>
                    <?php foreach ($categories as $category) { ?>
                        <option value="<?php echo $category['id'] ?>"
                            <?php if($category['id'] == $row['cat_id']){ ?>
                                selected
                            <?php  } ?>
                        ><?php echo $category['name'] ?></option>
                    <?php } ?>
                </select>
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
            
        