
<form method="post">
    masukkan sebuah angka : <input type="number" name="angka">
    <input type="submit" value="kirim">
</form>
<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka']; // Mengambil nilai angka dari form
    for ($i = 1; $i <= $angka; $i++) { // Melakukan perulangan dari 1 hingga angka yang dimasukkan
        echo "<br>nilai anda :-$i"; // Menampilkan nomor perulangan
    }
}
?>
