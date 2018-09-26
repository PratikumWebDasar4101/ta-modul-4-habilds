<?php date_default_timezone_set("Asia/Jakarta"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belanja</title>
</head>
<body>
    <form action="tampil.php" method="post">
        <table align="center">
            <tr>
                <th align="left">Alamat</th>
            </tr>
            <tr>
                <td><input type="text" style="width:100%" name="alamat"></td>
            </tr>
            <tr valign="top">
                <th align="left">Daftar Belanja</th>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="barang[]" value="Susu">Susu<br>
                    <input type="checkbox" name="barang[]" value="Kopi">Kopi<br>
                    <input type="checkbox" name="barang[]" value="Sabun Mandi">Sabun Mandi<br>
                    <input type="checkbox" name="barang[]" value="Shampoo">Shampoo
                </td>
            </tr>
            <tr valign="top">
                <th align="left">Jenis Pengiriman</th>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="pengiriman" value="Tiki">Tiki
                    <input type="radio" name="pengiriman" value="JNE">JNE
                    <input type="radio" name="pengiriman" value="Wahana">Wahana
                    <input type="radio" name="pengiriman" value="J&T">J&T
                </td>
            </tr>
            <tr>
                <input type="hidden" name="tanggal" value="<?php echo date("Y/m/d"); ?>">
                <td colspan="3"><input type="submit" value="Beli"></td>
            </tr>
        </table>
    </form>
</body>
</html>