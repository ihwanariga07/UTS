<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nm = $_POST['nama_event'];
$lk = $_POST['lokasi'];
$tgl = $_POST['tanggal'];
$jml = $_POST['jumlah_peserta'];

#3. menulis query
$simpan = "INSERT INTO tbl_event (nama_event,lokasi,tanggal_event,jumlah_peserta) VALUES ('$nm','$lk','$tgl','$jml')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
//header("location:index.php");
?>
<script>
    document.location="index.php";
</script>