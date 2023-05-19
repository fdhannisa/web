<?php
include 'koneksi.php';

$query = "SELECT*FROM mhs";
$sql = mysqli_query($conn, $query);
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header bg-success text-white">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NPM</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <!-- <th>Foto</th> -->
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($result = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $result['NPM']; ?></td>
                                    <td><?php echo $result['Nama']; ?></td>
                                    <td><?php echo $result['Jenis_Kelamin']; ?></td>
                                    <td><img src="img/<?php echo $result['Foto']; ?>" alt="one" style="width: 200px; height: 150px;"></td>
                                    <td><?php echo $result['Alamat']; ?></td>
                                    <td>
                                        <Button type="button" class="btn btn-warning">Edit</Button>
                                        <Button type="button" class="btn btn-danger">Delete</Button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>