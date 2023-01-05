<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        include 'koneksi.php';
        $id     = $_GET['id'];
        $query  = "SELECT * FROM presensi WHERE id='$id'";
        $result    = mysqli_query($conn, $query);
        $database  = mysqli_fetch_assoc($result);
        ?>
        <div class="col-10 m-auto" style="padding: 100px 0 0 0;">
            <h2 class="text-center fw-bold">Edit Data</h2>
            <div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">
                <form action="edit_proses.php" method="post">
                    <input type="hidden" name="id" value="<?=$database['id']?>">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <label for="exampleFormControlInput1" class="form-label">NPM</label>
                        <input name="NPM" type="text" class="form-control" id="exampleFormControlInput1" value="<?=$database['npm']?>">
                    </div>
                    <div class="mb-3">
                    <input type="hidden" name="id" value="<?=$database['id']?>">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input name="Nama" type="text" class="form-control" id="exampleFormControlInput1" value="<?=$database['nama_mahasiswa']?>">
                    </div>
                    <div class="mb-3">
                    <input type="hidden" name="id" value="<?=$database['id']?>">
                        <label for="exampleFormControlInput1" class="form-label">Mata Kuliah</label>
                        <input name="Mata_Kuliah" type="text" class="form-control" id="exampleFormControlInput1" value="<?=$database['id_matakuliah']?>">
                    </div>
                    <button class="btn btn-primary btn-md px-5 mt-2">Submit</button>
            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>