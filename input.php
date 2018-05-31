
<html> Formulir Tambah / Ubah Data
<hr>
<form action="simpan-baru.php" method="post">
    <table>
        <tr>
            <td> KODE </kd>
            <td>: <input type="text" name="KODE"></td>
        </tr>
        <tr>
            <td>NAMA_BARANG</td>
            <td>: <input type="text" name="namabarang"></td>
        </tr>
        <tr>
            <td>STOK</td>
            <td> : <input type="text" name="stok"></td>
        </tr>
    </table>
    <input type="submit" value="Simpan">
    <button type="button" onclick="window.location.href='main.php'">Batal</button>
</form>
</html>