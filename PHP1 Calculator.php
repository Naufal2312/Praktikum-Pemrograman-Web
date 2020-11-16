<html>
    <head>
        <title>Kalkulator</title>
    </head>
    <body>
        <form>
            <input type = "number" name = "bil1" placeholder = "Bilangan Pertama">
            <input type = "number" name = "bil2" placeholder = "Bilangan Kedua">
            </select>
            <button type = "submit" name = "submit" value = "submit">Hitung</button>
        </form>
</form>

<?php
if (isset($_GET['submit'])) {
     $bil1 = $_GET["bil1"];
     $bil2 = $_GET["bil2"];

     echo "Bilangan 1 : $bil1 <br> Bilangan 2 : $bil2 <br> <br>";
     echo "Penjumlahan <br> Operator : + <br>";
     $tambah = $bil1 + $bil2;
     echo "Hasil : $tambah <br> <br>";

     echo "Pengurangan <br> Operator : - <br>";
     $kurang = $bil1 - $bil2;
     echo "Hasil : $kurang <br> <br>";

     echo "Perkalian <br> Operator : * <br>";
     $kali = $bil1 * $bil2;
     echo "Hasil : $kali <br> <br>";

     echo "Pembagian <br> Operator : / <br>";
     $bagi = $bil1 / $bil2;
     echo "Hasil : $bagi <br> <br>";

     echo "Modulus <br> Operator : % <br>";
     $mod = $bil1 % $bil2;
     echo "Hasil : $mod <br> <br>";

 }
?>