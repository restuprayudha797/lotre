<?php
include 'config/function.php';

$kategori = getAllKategori();

// get data lotte by id
$datalotte = getDataLotteById($_GET['idlotte']);

// update Data
if (isset($_POST['submit'])) {

    updatedatalotto();
}

?>
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

    <div class="container mt-5">

        <form action="" method="post">
            <input type="hidden" name="idlotte" value="<?= $dtlotto["idlotte"]; ?>">
            <select class="form-select" aria-label="Default select example" required name="kategori">
                <option value="">Pilih Kategori</option>
                <?php foreach ($kategori as $row) : ?>
                    <option value="<?= $row['kategori'] ?>"><?= $row['kategori'] ?></option>
                <?php endforeach ?>
            </select>
            <br>

            <table id="myTable" class="table table-striped bordered">
                <tbody>
                    <tr>
                        <td>id lotte</td>
                        <td><input value="<?= $datalotte["idlotte"] ?>" type="number" placeholder="Masukkan Nomor Idlotte" required class="form-control" name="idlotte" readonly></td>
                    </tr>


                    <tr>
                        <td>Drawno</td>
                        <td><input value="<?= $datalotte["drawno"] ?>" type="text" placeholder="Masukkan drawno Lengkap" required="" class="form-control" name="drawno"></td>
                    </tr>
                    <tr>
                        <td>Angka 1</td>
                        <td><input value="<?= $datalotte["angka1"] ?>" type="text" placeholder="Masukkan Nomor Lotte" required="" class="form-control" name="angka1"></td>
                    </tr>
                    <tr>
                        <td>Angka 2</td>
                        <td><input value="<?= $datalotte["angka2"] ?>" type="text" placeholder="Masukkan Nomor Lotte" required="" class="form-control" name="angka2"></td>
                    </tr>
                    <tr>
                        <td>Angka 3</td>
                        <td><input value="<?= $datalotte["angka3"] ?>" type="text" placeholder="Masukkan Nomor Lotte" required="" class="form-control" name="angka3"></td>
                    </tr>
                    <tr>
                        <td>Angka 4</td>
                        <td><input value="<?= $datalotte["angka4"] ?>" type="text" placeholder="Masukkan Nomor Lotte" required="" class="form-control" name="angka4"></td>
                    </tr>
                    <tr>
                        <td>Angka 5</td>
                        <td><input value="<?= $datalotte["angka5"] ?>" type="text" placeholder="Masukkan Nomor Lotte" required="" class="form-control" name="angka5"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Update</td>
                        <td><input value="<?= $datalotte["tanggalupdate"] ?>" type="date" class="form-control" name="tanggalupdate"></td>
                    </tr>
                </tbody>

            </table>
            <div class="modal-footer">
                <button name="submit" value="submit" type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Ubah
                    Data</button>
            </div>
        </form>
    </div>
    </div>







</body>


</html>