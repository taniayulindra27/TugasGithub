<div class="content">
    <div class="page-title">Category</div>
    <div class="box">
        <a href="index.php?page=category/create">
            <button class="btn btn-primary">Tambah</button>
        </a>
        <p></p>
        <div class="data-title">Data Kategori</div>
        <?php
            require_once "../env.php";

            $category = new App\Category();
            $rows = $category->getCategory();

            if (isset($_POST['submit'])) {
                $category->setId($_POST['id']);
                
                $category->delete();
                // header('LOCATION: kategori.php');
            }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($rows as $row) { ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['ket'] ?></td>
                    <td>
                        <a href="index.php?page=category/edit&id=<?php echo $row['id'] ?>">
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