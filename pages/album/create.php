<?php
    require_once "../env.php";

    $post = new App\Post();
    $posts = $post->getPost();

    if (isset($_POST['submit'])) {
        $photo = new App\Photo();
        $photo->setDate($_POST['date']);
        $photo->setTitle($_POST['title']);
        $photo->setText($_POST['text']);
        $photo->setPost_id($_POST['post_id']);

        $photo->store();

        // header('Location: kategori.php');
    }  
?>
<div class="content">
    <div class="page-title">Photo</div>
    <div class="box" style="width: 600px">
        <div class="data-title">Tambah Data Photo</div>
        <form action="" method="POST">
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>


            <div class="form-group">
                <label for="text">Text</label>
                <textarea name="text" class="form-control" id="text" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="post_id">Post</label>
                <select name="post_id" id="post_id" class="form-control">
                    <option value="">Silahkan Pilih</option>
                    <?php foreach ($posts as $post) { ?>
                        <option value="<?php echo $post['id'] ?>"><?php echo $post['title'] ?></option>
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