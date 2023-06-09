<?php  

// =================== START CONNECT TO DATABASE ===================
$DB_HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'databaseadminslot';

$conn = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if (!$conn) {

    echo 'database gagal tersambung';
}
// =================== END CONNECT TO DATABASE ===================

// =================== START FUNCTION QUERY ===================

function query($query){

    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)){

        $rows[] = $row;

    }

    return $rows;

}

// =================== END FUNCTION QUERY ===================

// =================== START FUNCTION getTwoDataLottoDesc ===================


function getTwoDataLottoDesc(){

    $dataLotto = query("SELECT * FROM datalotto ORDER BY idlotte DESC LIMIT 2");

    return $dataLotto;

}

// =================== END FUNCTION getTwoDataLottoDesc ===================

// =================== START FUNCTION getAllDataLotto ===================

function getAllDataLotto(){

    $dataLotto = query("SELECT * FROM datalotto ORDER BY idlotte DESC");

    return $dataLotto;
}

// =================== END FUNCTION getAllDataLotto ===================

// =================== START FUNCTION LOGIN ===================

function login($email, $password){

    // chek apakah email yang dimasukkan ada di database
    $user = query("SELECT * FROM `users` WHERE email = '$email'")[0];

    if($user){

        // cek password
        if(password_verify($password, $user['password'])){
            // set session

            $_SESSION['Login'] = true;
            
            // redirect to admin page
            echo"<script>alert('Login Berhasil'); window.location.href = 'halamanutama.php';</script>";
            
        }else{

            echo 'login gagal';
        }

        
    }else{

        echo 'user tidak dapat ditemukan';
    }
    



}

// =================== END FUNCTION LOGIN ===================

// =================== START FUNCTION getTotalDataLotto ===================

function getTotalDataLotto(){

    $datalotto = query("SELECT * FROM datalotto");

    $total = 0;
    foreach($datalotto as $row){
        $total++;
    }
    return $total;
}

// =================== END FUNCTION getTotalDataLotto ===================

// =================== START FUNCTION getTotalKategori ===================
function getTotalKategori(){

    $datalotto = query("SELECT * FROM kategorilotto");

    $total = 0;
    foreach($datalotto as $row){
        $total++;
    }
    return $total;

}

// =================== END FUNCTION getTotalKategori ===================

// =================== START FUNCTION tambahDataLotto ===================

function tambahDataLotto(){

    global $conn;
    $kategori = htmlspecialchars($_POST['lotte-kategori']);
    $drawno = htmlspecialchars($_POST['drawno']);
    $angka1 = htmlspecialchars($_POST['angka1']);
    $angka2 = htmlspecialchars($_POST['angka2']);
    $angka3 = htmlspecialchars($_POST['angka3']);
    $angka4 = htmlspecialchars($_POST['angka4']);
    $angka5 = htmlspecialchars($_POST['angka5']);
    $tanggalupdate = htmlspecialchars($_POST['tanggalupdate']);

    $query = "INSERT INTO `datalotto` (`idlotte`, `kategori`, `drawno`, `angka1`, `angka2`, `angka3`, `angka4`, `angka5`, `tanggalupdate`) VALUES (NULL, '$kategori', '$drawno', '$angka1', '$angka2', '$angka3', '$angka4', '$angka5', '$tanggalupdate');";

    $result = mysqli_query($conn, $query);

    if($result){
        echo"<script>alert('Data berhasil ditambah!'); window.location.href = 'datalotto.php';</script>";
    }else{

        echo"<script>alert('Data gagal ditambah!'); window.location.href = 'datalotto.php';</script>";

    }

   

    
}

// =================== END FUNCTION tambahDataLotto ===================


// =================== START FUNCTION updatedatalotto ===================

function updatedatalotto(){

    global $conn;
    $idlotte = $_POST['idlotte'];
    $kategori = htmlspecialchars($_POST['kategori']);
    $drawno = htmlspecialchars($_POST['drawno']);
    $angka1 = htmlspecialchars($_POST['angka1']);
    $angka2 = htmlspecialchars($_POST['angka2']);
    $angka3 = htmlspecialchars($_POST['angka3']);
    $angka4 = htmlspecialchars($_POST['angka4']);
    $angka5 = htmlspecialchars($_POST['angka5']);
    $tanggalupdate = htmlspecialchars($_POST['tanggalupdate']);

    $query = "UPDATE `datalotto` SET `kategori` = '$kategori', `drawno` = '$drawno', `angka1` = '$angka1', `angka2` = '$angka2', `angka3` = '$angka3', `angka4` = '$angka4', `angka5` = '$angka5', `tanggalupdate` = '$tanggalupdate' WHERE `datalotto`.`idlotte` = $idlotte;";

    $result = mysqli_query($conn, $query);

    if($result){
        echo"<script>alert('Data berhasil diubah!'); window.location.href = 'datalotto.php';</script>";
    }else{

        echo"<script>alert('Data gagal diubah!'); window.location.href = 'datalotto.php';</script>";

    }

   

    
}

// =================== END FUNCTION updatedatalotto ===================

// =================== START FUNCTION getAllKategori ===================

function getAllKategori(){

    $kategori = query("SELECT * FROM kategorilotto");

    return $kategori;

}

// =================== END FUNCTION getAllKategori ===================

// =================== START FUNCTION getDataLotteById ===================

function getDataLotteById($id){

    $dalotte = query("SELECT * FROM `datalotto` WHERE `idlotte` = $id ")[0];

    return $dalotte;

}

// =================== END FUNCTION getDataLotteById ===================

// =================== START FUNCTION tambahKategori ===================

function tambahKategori(){

    global $conn;
    $kategori = htmlspecialchars($_POST['kategori']);
    $tanggalinput = date("Y-m-d");
    
    $query = "INSERT INTO `kategorilotto` (`id_kategori`, `kategori`, `tanggalinput`) VALUES (NULL, '$kategori', '$tanggalinput');";

    $result = mysqli_query($conn, $query);

    if($result){

        echo"<script>alert('Data berhasil Tambahkan!'); window.location.href = 'kategorilotto.php';</script>";
    }else{
        echo"<script>alert('Data gagal Tambahkan!'); window.location.href = 'kategorilotto.php';</script>";
    }
    


}

// =================== END FUNCTION tambahKategori ===================









