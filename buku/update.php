<?php
require_once('../index.php');
$data = json_decode(file_get_contents("php://input"));

if($data->id!=null) {
    $isbn        = $data->isbn;
    $judul       = $data->judul;
    $pengarang   = $data->pengarang;
    $jumlah      = $data->jumlah;
    $tanggal     = $data->tanggal;
    $abstrak     = $data->abstrak;

    $sql = $conn->prepare("UPDATE buku SET isbn=?, judul=?, pengarang=?, jumlah=?, tanggal=?, abstrak=?");
    $sql ->bind_param('ssdd', $isbn, $judul, $pengarang, $jumlah, $tanggal, $abstrak);
    $sql -> execute();

    if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
    } else {
        echo json_encode(array('RESPONSE' => 'FAILED'));
    }
} else {
    echo "FAILED";
}
?>