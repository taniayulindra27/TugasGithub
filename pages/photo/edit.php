<?php
    require_once "../env.php";

    $post = new App\Post();
    $posts = $post->getPost();

    $post = new App\Photo();
    $row = $post->edit($_GET['id']);

    if (isset($_POST['submit'])) {
        $photo->setId($_POST['id']);
        $photo->setDate($_POST['date']);
        $photo->setTitle($_POST['title']);
        $photo->setText($_POST['text']);
        $photo->setPost_id($_POST['post_id']);

        $photo->update();

        // header('Location: kategori.php');
    }  
?>
<div class="content">
    <div class="page-title">Photo</div>
    <div class="box" style="width: 600px">
        <div class="data-title">Edit Data Photo</div>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" class="form-control" value="<?php echo $row['date'] ?>" required>
            </div>
            
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="<?php echo $row['slug'] ?>" required>
            </div>

            <div class="form-group">
                <label for="text">Text</label>
                <input type="text" id="text" name="text" class="form-control" value="<?php echo $row['slug'] ?>" required>
            </div>


            <div class="form-group">
                <label for="post_id">POST</label>
                <select name="post_id" id="post_id" class="form-control">
                    <option value="">Silahkan Pilih</option>
                    <?php foreach ($categories as $category) { ?>
                        <option value="<?php echo $category['id'] ?>"
                            <?php if($category['id'] == $row['post_id']){ ?>
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
            
        