<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleTicket.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" name="">
        <table>
            <td><font>Pembelian Tiket</font></td>

            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>

            <tr>
                <td>Judul Film</td>
                <td><select name="Judul Film">
                <option value="-">- Pilih Film -
                <option value="The Walk">The Walk 
                <option value="Into The Wild">Into The Wild
                <option value="The Reveant">The Reveant 
                <option value="Bruce Willis Die Hard">Bruce Willis Die Hard
                </select></td>
            </tr>

            <tr>
                <td>Jam Tayang</td>
                <td><select name="Jam Tayang">
                <option value="-">- Pilih Jam -
                <option value="13.00">13.00 
                <option value="15.00">15.00
                <option value="17.00">17.00
                <option value="19.00">19.00
                </select></td>
            </tr>

            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="date"></td>
            </tr>

            <tr>
                <td><input type="submit" name="Submit" value="Pesan"></td>
                <td><input type="reset" name="reset" value="Cancel"></td>
            <tr>
        </table>
    </form>
</body>
</html>

<?php
if (isset($_POST['Submit'])) {

echo '<h1>Pesanan Tiket Anda</h1>';
echo '<li>Nama          : ' . $_POST['Nama'] . '</li>';
echo '<li>Judul Film    : ' . $_POST['Judul_Film'] . '</li>';
echo '<li>Jam Tayang    : ' . $_POST['Jam_Tayang'] . '</li>';
echo '<li>Tanggal       : ' . $_POST['date'] . '</li>';
}?>
