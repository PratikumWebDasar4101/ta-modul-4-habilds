<?php include("proses.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampilan</title>
</head>
<body>
    <table>
        <tr>
            <td>Tanggal Submit</td>
            <td>:</td>
            <td><?php echo $tgl_beli; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $user["nama"]; ?></td>
        </tr>
        <tr>
            <td>No. Telp</td>
            <td>:</td>
            <td><?php echo $user["notelp"]; ?></td>
        </tr>
        <tr valign="top">
            <td>Barang yang dibeli</td>
            <td>:</td>
            <td>
                <?php 
                $barang_str = array();
                foreach ($barang as $barang_b) {
                    $barang_str[] = $barang_b;
                }
                echo implode(", ",$barang_str);
                ?>
            </td>
        </tr>
        <tr>
            <td>Pengiriman</td>
            <td>:</td>
            <td><?php echo $pengiriman . " " . $harga_peng; ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td><?php echo total($harga, $harga_peng); ?></td>
        </tr>
    </table>
</body>
</html>