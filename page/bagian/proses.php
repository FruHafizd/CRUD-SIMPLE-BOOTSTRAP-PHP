<?php 
    require_once '../../config/config.php';
    require_once '../../config/koneksi.php';


    if (isset($_POST['simpan'])) {
       $id = $_POST['id'];
       $nama = $_POST['nama'];

       $submit = $koneksi->query("INSERT INTO bagian VALUES(
        '$id',
        '$nama'
        )");

        // var_dump($nik, $koneksi->error);
        // die();

        if ($submit) {
            echo "
            <script>
            alert('Data Berhasil Di ditambahkan!!');
            location.href='../bagian';
            </script>";
        }else {
            echo "
            <script>
            alert('Data Gagal Di ditambahkan!!');
            location.href='../bagian/tambah';
            </script>";
        }


    }else if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
 
        $submit = $koneksi->query("UPDATE bagian SET 
            id = '$id',
            nama = '$nama'
            WHERE
            id = '$id';
        ");
 
        //  var_dump($id, $koneksi->error);
        //  die();
 
         if ($submit) {
             echo "
             <script>
             alert('Data Berhasil Diubah!!');
             location.href='../bagian';
             </script>";
         }else {
             echo "
             <script>
             alert('Data Gagal Diubah!!');
             location.href='../bagian/edit';
             </script>";
         }
 
     }else if (isset($_GET['id'])) {
        
        $delete = $koneksi->query("DELETE FROM bagian WHERE id = '$_GET[id]' ");
        
        if ($delete) {
            echo "
            <script>
            alert('Data Berhasil Dihapus!!');
            location.href='../bagian';
            </script>";
        }else {
            echo "
            <script>
            alert('Data Gagal Dihapus!!');
            location.href='../bagian/edit';
            </script>";
        }
     }

    







?>