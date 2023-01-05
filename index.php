<?php
include 'koneksi.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-10 m-auto">
            <p class="h1 text-center p-5">Table Mahasiswa</p>
            <a href="create.php"class="btn btn-primary">Tambah data</a>
            <table class="table table-hover table-bordered border-primary mt-3">
                <thead>
                    <tr>
                        <th scope="col">NO.</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Mata Kuliah</th>
                    </tr>
                </thead>
                <?php
                $query = "SELECT * FROM presensi";
                $result = mysqli_query($conn, $query);

                $no = 1;
                while ($database = mysqli_fetch_assoc($result)) {
                ?>
                    <tbody>
                        <td scope="row"><?= $no++ ?></td>
                        <td scope="row"><?= $database['npm']?></td>
                        <td scope="row"><?= $database['nama_mahasiswa']?></td>
                        <td scope="row"><?= $database['id_matakuliah']?></td>
                        

                    </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>