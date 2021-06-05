<?php
require('func.php');

$id = $_GET["id"];

    if( hapus($id) > 0){
        echo"
        <script>
            alert('Data Terhapus!');
            document.location.href = 'logout.php';
        </script>
        ";
    } else{
        echo"
        <script>
            alert('Data Gagal Terhapus!');
            document.location.href = './profile/profile.php';
        </script>
        ";
    }

?>