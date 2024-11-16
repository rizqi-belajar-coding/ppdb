<?php 
require_once('koneksi.php');
$sql = "SELECT * FROM daftar_sekolah";
$result = $conn->query($sql);

$daftar_sekolah = $result->fetch_all(MYSQLI_ASSOC);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>daftar_sekolah</h1>
    <table>
        <tr> 
            <th> * </th>
            <th>kode</th>
            <th>Nama_Sekolah</th>
            <th>Kelurahan</th> 
            <th>Kecamatan</th>
            <th>Status</th> 
            <th>ikut_ppdb</th>
         </tr>
     <?php
     foreach ($daftar_sekolah as $key => $row) {
   ?>
     <tr>
         <td><?php echo $key + 1; ?></td>
         <td><?php echo $row['kode'] ?></td>
         <td><?php echo $row['sekolah'] ?></td>
         <td><?php echo $row['kelurahan'] ?></td>
         <td><?php echo $row['kecamatan'] ?></td>
         <td><?php echo $row['status_sekolah'] ?></td>
         <td><?php echo $row['ikut_ppdb'] ?></td>
     </tr>
     <?php } ?>
    </table>
</body>
</html>


?>