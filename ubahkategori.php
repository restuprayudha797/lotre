<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</head>

<body style="background-color:  #f2f3f8 ;">
    <?php
    require 'function.php';
    $conn = mysqli_connect("localhost", "root", "", "databaseadminslot");

    // Memeriksa koneksi ke database
    if (!$conn) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    function query($query)
    {
        global $conn;
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    // Memeriksa apakah parameter "idlotte" telah diberikan melalui metode GET
    if (isset($_GET['nomor'])) {
        $nomor = $_GET['nomor'];
        $post = query("SELECT * FROM kategorilotto WHERE nomor = '$nomor'");
        if (isset($_POST["submit"])) {
            if (ubah($_POST) > 0) {
                echo '<script>alert("DATA BERHASIL Di UBAH"); window.location="kategorilotto.php";</script>';
            } else {
                echo '<script>alert("data tidak bisa  diubah ")</script>';
            }
        }
    }
    ?>
    <form action="" method="post">
        <input type="hidden" name="nomor" value="<?= $dtlotto["nomor"]; ?>">
        <div class="modal-body">
            <table id="myTable" class="table table-striped bordered">
                <tbody>
                    <tr>
                        <td>Nomor</td>
                        <td><input value="<?= $post["nomor"] ?>" type="number" placeholder="Masukkan Nomor urutan" required="" class="form-control" name="nomor"></td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td><input value="<?= $post["kategori"] ?>" type="text" placeholder="Masukkan Nomor urutan" required="" class="form-control" name="kategori"></td>
                    </tr>
                    <tr>
                        <td>tanggalinput</td>
                        <td><input value="<?= $post["tanggalinput"] ?>" type="date" placeholder="Masukkan Tanggal Yang Benar" required="" class="form-control" name="tanggalinput"></td>
                    </tr>
                </tbody>

            </table>
        </div>
        <div class="modal-footer">
            <button name="submit" value="submit" type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Ubah Data</button>
        </div>
    </form>






</body>


</html>