<div class="content">
    <div class="page-title">Post</div>
    <div class="box">
        <a href="index.php?page=post/create">
            <button class="btn btn-primary">Tambah</button>
        </a>
        <p></p>
        <div class="data-title">Data Post</div>
        <?php
            require_once "../env.php";

            $post = new App\Post();
            $rows = $post->getPost();

            if (isset($_POST['submit'])) {
                $post->setId($_POST['id']);
                
                $post->delete();
                // header('LOCATION: kategori.php');
            }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Slug</th>
                    <th>Title</th>
                    <th>Ket</th>
                    <th>Cat ID</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($rows as $row) { ?>
                <tr>
                    <td><?php echo $row['date'] ?></td>
                    <td><?php echo $row['slug'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['ket'] ?></td>
                    <td><?php echo $row['cat_id'] ?></td>
                    <td>
                        <a href="index.php?page=post/edit&id=<?php echo $row['id'] ?>">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <form method="POST" style="display: inline-block">
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>