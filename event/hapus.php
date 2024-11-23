<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil id dari tombol hapus
$nama_event = $_GET['nama_event'];

#3. menulis query
$hapus = "DELETE FROM tbl_event WHERE nama_event='$nama_event'";

#4. jalankan query
$proses = mysqli_query($koneksi, $hapus);

#5. mengalihkan halaman

?>
<script>
    document.location="index.php";
</script>