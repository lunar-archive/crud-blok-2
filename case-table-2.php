<?php
    include("koneksi.php");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Table</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="case-2.css">
    <script src="case-2.js"></script>
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Data <b>Siswa</b></h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New Data</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $query = "SELECT * FROM siswa WHERE nama LIKE '%$cari%' OR kelas LIKE '%$cari%' OR jurusan LIKE '%$cari%'";
        } else{
            $query = "SELECT * FROM siswa";
        }
        $query = mysqli_query($db, $query);
        while ($siswa = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>". $siswa ['id']. "</td>";
            echo "<td>". $siswa ['nama']. "</td>";
            echo "<td>". $siswa ['kelas']. "</td>";
            echo "<td>". $siswa ['jurusan']. "</td>";
            echo "<td>";
            echo "<a href='edit.php?id=".$siswa['id'] . "'>Edit</a>|";
            echo ("<a href='hapus.php?id=".$siswa['id'] . "'>Hapus</a>");
        }
        ?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html> 