<?php 
include("konek.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="Style.css">
<title>Perpustakaan Online</title>
</head>
<body>
    
<div id="container">
<div class="header"><img src="images/logo1.png" width="150" height="100"><h1>Perpustakaan Indonesia</h1></div>
<h4>Selamat Datang</h4>

<div class="main">
<div class="left">
<h3 align="center">MENU</h3>
<ul>
<li><a href="http://localhost/uts/index2.php">Kembali</a></li>
<li><a href="http://localhost/uts/home.php">Home</a></li>
<li><a href="http://localhost/uts/daftar_buku.php">Daftar Buku</a></li>
<li><a href="#">Admin</a></li>
</ul>

<br>

<h3 align="center">BUKU TERPOPULER</h3>
<ul>
<li><a href="https://www.jurnalweb.com/ebook-untuk-belajar-web-design-development-di-era-modern/">Web Design</a></li>
<li><a href="https://www.jagoanhosting.com/blog/7-rekomendasi-buku-untuk-programmer/">Pemrograman</a></li>
<li><a href="https://www.kompasiana.com/ribhigustizio9433/5e3212f5d541df78bc4fdde2/resensi-buku-pemrograman-database-komplet?page=all">Database</a></li>
</ul>
</div>
</div>

<div class="container">
    <center>Daftar Buku</center>
    <div class="row justify-content-center mt-5">
    <nav>
    <a href="form.php">Tambah Buku Baru [ + ]</a>
    </nav>
    <br>

    <div class="table-responsive">
        <table id="table-datables" class="table" border="1">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Emksemplar</th>
                    <th>Pengarang</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql= "SELECT * FROM tperpus";
            $query= mysqli_query($db, $sql);
            $no=1;

            while($member= mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$no++. "</td>";
                echo "<td>".$member['judul_buku']."</td>";
                echo "<td>".$member['eksemplar']."</td>";
                echo "<td>".$member['pengarang']."</td>";

                echo "<td>";
                echo "<a href='form-edit.php?id=".$member['id']."'>edit</a> | ";
                echo "<a href='hapus.php?id=".$member['id']."'>hapus</a> | ";
                echo "</td>";
                echo "</tr>";

            }
            ?>

            </tbody>
        </table>
    
    
    </div>
            <p>Total : <?php echo mysqli_num_rows($query) ?></p>
    </div>
    
    </div>

</div>
</div>
<div class="footer"><p align="center">Copyright © 2021 - Dewi Sa'aidah SJ</a></p>
</div>
</body>
</html>