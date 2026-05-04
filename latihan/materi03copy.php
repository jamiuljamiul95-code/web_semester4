<?php
function tambah(int $a, int $b) {
    $jumlah = $a + $b;
    return $jumlah;
}

function kali(int $a, int $b) {
    $jumlah2 = $a * $b;
    return $jumlah2;
}

function kurang(int $a, int $b) {
    $jumlah3 = $a - $b;
    return $jumlah3;
}

function bagi(int $a, int $b) {
    $jumlah4 = $a / $b;
    return $jumlah4;
}

echo "<form method=\"POST\">";
echo "<label for=\"angka1\">Angka 1:</label>";
echo "<input type=\"number\" name=\"angka1\" id=\"angka1\" required><br><br>";
echo "<label for=\"angka2\">Angka 2:</label>";
echo "<input type=\"number\" name=\"angka2\" id=\"angka2\" required><br><br>";
echo "<button type=\"submit\" name=\"kirim\">Tambah</button>";
echo "<button type=\"submit\" name=\"kirim2\">Kali</button>";
echo "<button type=\"submit\" name=\"kirim3\">Kurang</button>";
echo "<button type=\"submit\" name=\"kirim4\">Bagi</button>";
echo "</form>";

if (isset($_POST['kirim'])) {
    $angka1 = (int)$_POST['angka1'];
    $angka2 = (int)$_POST['angka2'];
    $hasil = tambah($angka1, $angka2);
    echo "Hasil penjumlahan: $hasil<br>";
}

if (isset($_POST['kirim2'])) {
    $angka1 = (int)$_POST['angka1'];
    $angka2 = (int)$_POST['angka2'];
    $hasil = kali($angka1, $angka2);
    echo "Hasil perkalian: $hasil<br>";
}

if (isset($_POST['kirim3'])) {
    $angka1 = (int)$_POST['angka1'];
    $angka2 = (int)$_POST['angka2'];
    $hasil = kurang($angka1, $angka2);
    echo "Hasil pengurangan: $hasil<br>";
}

if (isset($_POST['kirim4'])) {
    $angka1 = (int)$_POST['angka1'];
    $angka2 = (int)$_POST['angka2'];
    if ($angka2 != 0) {
        $hasil = bagi($angka1, $angka2);
        echo "Hasil pembagian: $hasil<br>";
    } else {
        echo "Error: Tidak bisa dibagi dengan nol.<br>";
    }   
}




// 1. Function untuk validasi login
function cekLogin($username, $password) {
    // Data dummy untuk contoh (biasanya ini diambil dari database)
    $user_valid = "admin";
    $pass_valid = "12345";

    return $username === $user_valid && $password === $pass_valid;
}

// 2. Function untuk menampilkan form login
function tampilkanFormLogin() {
    echo '<form method="post">
        <label for="user">Username:</label>
        <input type="text" id="user" name="user" required><br><br>
        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" required><br><br>
        <input type="submit" value="Login">
    </form>';
}

// 3. Memproses data jika form dikirim (Method POST)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST['user'] ?? '';
    $pass = $_POST['pass'] ?? '';

    if (cekLogin($user, $pass)) {
        echo '<h3 style="color: green;">Login Berhasil! Selamat datang, ' . htmlspecialchars($user) . '.</h3>';
    } else {
        echo '<h3 style="color: red;">Login Gagal! Username atau Password salah.</h3>';
    }
}

// 4. Menampilkan form login
tampilkanFormLogin();
?>