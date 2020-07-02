<?php
require_once 'functions.php';
$id = $_GET['id'];

if (delete($id) > 0) {
    echo "<script>
                alert('Data Berhasil Dihapus');
                document.location.href='index.php';
             </script>

            ";
} else {
    echo "Gagal";
}
