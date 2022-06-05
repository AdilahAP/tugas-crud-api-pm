<?php
require_once('../index.php');
if (isset($_POST['isbn']) && isset($_POST['judul']) && isset($_POST['pengarang']) && isset($_POST['jumlah']) && isset($_POST['tanggal']) && isset($_POST['abstrak']));
$isbn       = $_POST['isbn'];
$judul      = $_POST['judul'];
$pengarang  = $_POST['pengarang'];
$jumlah     = $_POST['jumlah'];
$tanggal    = $_POST['tanggal'];
$abstrak    = $_POST['abstrak'];

$sql  = $conn->prepare("INSERT INTO buku (isbn, judul, pengarang, jumlah, tanggal, abstrak) VALUES (?, ?, ?, ?, ?, ?)");
$sql  -> bind_param('ssdd', $isbn, $judul, $pengarang, $jumlah, $tanggal, $abstrak);
$sql  -> execute();

if ($sql) {
    echo json_encode(array('RESPONSE' => 'SUCCESS'));
} else {
    echo "FAILED";
}
?>