<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD dan php</title>
</head>
<body>
    <h2>crud data</h2>
    <br/>
    <a href="index.html">kembali</a>
    <h3>tambah data </h3>
    <form method ="post" action="tambah_aksi.php">
        <table>
        <tr>
                <td>ID</td>
                <td><input type ="text" name="ID"></td>
            </tr>
            <tr>
                <td>nama barang</td>
                <td><input type ="text" name="nama_barang"></td>
            </tr>
            <tr>
                <td>merek</td>
                <td><input type="text" name="merek"></td>
            </tr>
            <tr>
                <td>stok</td>
                <td><input type="number" name="stok"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>