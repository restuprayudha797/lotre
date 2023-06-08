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

    $dataLotto = query("SELECT * FROM datalotto");

    return $dataLotto;
}

// =================== END FUNCTION getAllDataLotto ===================


?>




