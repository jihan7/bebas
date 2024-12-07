<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>
<body>
    <h2>edit data data barang</h2>
    <?php
        include 'koneksi.php';
        $ID = $_GET['ID'];
        $data = mysqli_query($koneksi,"SELECT * FROM databarang WHERE ID ='$ID'");
        while($d = mysqli_fetch_array($data)){
     ?>
      <form method ="post" action="update.php">

        <form>
        <table>
        <tr>
                <td>ID</td>
                <td><input type ="number" name="ID" value="<?php echo $d['ID']?>"></td>
            </tr>

            <tr>
                <td>nama barang</td>
                <td><input type ="text" name="nama_barang" value="<?php echo $d['nama_barang']?>"></td>
            </tr>

            <tr>
                <td>merek</td>
                <td><input type ="text" name="merek" value="<?php echo $d['merek']?>"></td>
            </tr>
            <tr>
                <td>stok</td>
                <td><input type ="text" name="stok" value="<?php echo $d['stok']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
    <?php
        }
        ?>
</body>
</html>