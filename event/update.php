<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id = $_POST['id'];
$nm = $_POST['nama_event'];
$lk = $_POST['lokasi'];
$tgl = $_POST['tanggal'];
$jml = $_POST['jumlah_peserta'];

#3. menulis query
$edit = "UPDATE tbl_event SET nama_event='$nm', lokasi='$lk',tanggal='$tgl',jumlah_peserta='$jml' WHERE id='$id'";

#.cancel



#4. jalankan query
$proses = mysqli_query($koneksi, $edit);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>