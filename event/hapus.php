<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil id dari tombol hapus
$id = $_GET['xyz'];

#3. menulis query
$hapus = "DELETE FROM tbl_event WHERE id='$id'";

#4. jalankan query
$proses = mysqli_query($koneksi, $hapus);

#5. mengalihkan halaman

?>
<script>
    document.location="index.php";
</script>