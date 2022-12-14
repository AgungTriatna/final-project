<!-- <?php

define('DB_HOST', $_ENV['DB_HOST']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASS', $_ENV['DB_PASS']);
define('DB_NAME', $_ENV['DB_NAME']);
// create connection
$conn = mysqli_connect ($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

// check  connection

if (!$conn) {
    echo "Koneksi Gagal";
}


// proses menerima parameter dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$presensi = $_POST['presensi']; 
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];


// query insert data
$sql = "insert into nilai_mhs(nama,nim,presensi,tugas,uts,uas) values ('$nama', '$nim', '$presensi', '$tugas', '$uts', '$uas')";

// menjalankan query
 
if(mysqli_query($conn, $sql)){
    // "Data berhasil ditambahkan ke dalam Database";
    header("Location:select.php");
}else{
    echo "Data gagal ditambahkan";
} -->
