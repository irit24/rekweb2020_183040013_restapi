<?php
$mysqli = new mysqli("localhost", "root", "", "universitas_pasundan");

$result = $mysqli->query("SELECT * FROM mahasiswa");
$rows = $result->fetch_all();
$data_json = json_encode($rows);
// echo $data_json;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rest APi</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<body class="container">
    <h3 class="my-3">Daftar Mahasiswa</h3>
    <table border="1" class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>NRP</th>
                <th>Email</th>
            </tr>

        </thead>

        <tbody>
            <!-- <?= $i = 1; ?> -->
            <?php foreach (json_decode($data_json) as $data) { ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $data[1]; ?></td>
                    <td><?= $data[2]; ?></td>
                    <td><?= $data[3]; ?></td>

                </tr>
                <!-- <?= $i++; ?> -->
            <?php } ?>
        </tbody>
    </table>
</body>

</html>