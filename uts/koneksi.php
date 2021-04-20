<?php
$host = "localhost"; //127.0.0.1
$username = "root"; 
$password = "";
$database = "siswa"; //siswa

$koneksi=mysql_connect ($host, $user, $password);
msql_select_db ($database, $koneksi);

//cek koneksi
if($koneksi){
echo "Berhasil Terhubung";
}else{
echo "Gagal Terhubung";
}
?>