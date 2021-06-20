<div class="content">
    <div class="page-title">Photo</div>
    <div class="box">
        <a href="index.php?page=photo/create">
            <button class="btn btn-primary">Tambah</button>
        </a>
        <p></p>
        <div class="data-title">Data Photo</div>
        <?php
            require_once "../env.php";

            $photo = new App\Photo();
            $rows = $photo->getPhoto();

            if (isset($_POST['submit'])) {
                $photo->setId($_POST['id']);
                
                $photo->delete();
                // header('LOCATION: kategori.php');
            }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Text</th>
                    <th>Post ID</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($rows as $row) { ?>
                <tr>
                    <td><?php echo $row['date'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['text'] ?></td>
                    <td><?php echo $row['post_id'] ?></td>
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