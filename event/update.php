<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id = $_POST['id'];
$kd = $_POST['nama_event'];
$jrs = $_POST['lokasi'];
$jrs = $_POST['tanggal_event'];
$jrs = $_POST['jumlah_peserta'];

#3. menulis query
$edit = "UPDATE tbl_event SET kode='$kd', jurusan='$jrs' WHERE id='$id'";

#.cancel



#4. jalankan query
$proses = mysqli_query($koneksi, $edit);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>