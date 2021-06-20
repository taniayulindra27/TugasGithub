<div class="content">
    <div class="page-title">Album</div>
    <div class="box">
        <a href="index.php?page=photo/create">
            <button class="btn btn-primary">Tambah</button>
        </a>
        <p></p>
        <div class="data-title">Data Album</div>
        <?php
            require_once "../env.php";

            $album = new App\Album();
            $rows = $album->getAlbum();

            if (isset($_POST['submit'])) {
                $album->setId($_POST['id']);
                
                $album->delete();
                // header('LOCATION: kategori.php');
            }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Text</th>
                    <th>Photo ID</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($rows as $row) { ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['text'] ?></td>
                    <td><?php echo $row['photo_id'] ?></td>
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