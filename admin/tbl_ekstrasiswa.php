<?php include ('heder.php');?>
<html>
<head>
    <title>Admin</title>
</head>
<body>
    <br><font size="4"><center><b>DATA SISWA</b></center><font><br>
    <a href="tambah_ekstrasiswa.php" style="padding:0.4% 0.8%; margin-left: 5%; background-color: #009900;color: #fff;border-radius: 2px;text-decoration: none;">Add</a>
    <table width="90%" style="margin-top: 1%; margin-left: 5%;"  border="1" cellpadding="0" cellspacing="0">
        <tr bgcolor="#FFA600" height="40">
            <th width="12%"><center>Id Ekstrakulikuler</center></th>&nbsp;
            <th width="12%"><center>Id Siswa</center></th>&nbsp;
            <th width="12%"><center>Opsi</center></th>&nbsp;
        </tr>
<?php
include "koneksi.php";
$Lihat  = "SELECT * FROM ekstra_siswa";
$Tampil = mysqli_query($conn, $Lihat);
while ( $hasil             = mysqli_fetch_array ($Tampil)) {
        $id_ekstra         = stripslashes  ($hasil['id_ekstra']);
        $id_siswa          = stripslashes  ($hasil['id_siswa']);
        {
?>
        <tr align="center" height="40">
            <td><?=$id_ekstra?></td>
            <td><?=$id_siswa?></td>
            <td>
                <a onclick="return confirm('tekan OKE untuk menghapus')" href="hapus_ekstrasiswa.php?id=<?php echo $hasil['id_ekstra'];?>" style="padding:1% 1%;background-color: #B22222;color: #fff;border-radius: 2px;text-decoration: none;">Delete</a>
                <a href="edit_ekstrasiswa.php?id=<?php echo $hasil['id_ekstra'];?>" style="padding:1% 1%;background-color: #1E90FF;color: #fff;border-radius: 2px;text-decoration: none;">Update</a>
            </td>
<?php }} ?>
    </table>
</body>
</html>
<?php include ('footer.php');?>