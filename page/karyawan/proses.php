<?php 
    require_once '../../config/config.php';
    require_once '../../config/koneksi.php';


    if (isset($_POST['simpan'])) {
       $nik = $_POST['nik'];
       $nama = $_POST['nama'];
       $tanggal_mulai = $_POST['tanggal_mulai'];
       $gaji_pokok = $_POST['gaji_pokok'];
       $status_karyawan = $_POST['status_karyawan'];
       $bagian_id = $_POST['bagian_id'];

       $submit = $koneksi->query("INSERT INTO karyawan VALUES(
        '$nik',
        '$nama',
        '$tanggal_mulai',
        '$gaji_pokok',
        '$status_karyawan',
        '$bagian_id'
        )");

        // var_dump($nik, $koneksi->error);
        // die();

        if ($submit) {
            echo "
            <script>
            alert('Data Berhasil Di ditambahkan!!');
            location.href='../karyawan';
            </script>";
        }else {
            echo "
            <script>
            alert('Data Gagal Di ditambahkan!!');
            location.href='../karyawan/tambah';
            </script>";
        }


    }else if (isset($_POST['edit'])) {
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $tanggal_mulai = $_POST['tanggal_mulai'];
        $gaji_pokok = $_POST['gaji_pokok'];
        $status_karyawan = $_POST['status_karyawan'];
        $bagian_id = $_POST['bagian_id'];
 
        $submit = $koneksi->query("UPDATE karyawan SET 
            NIK = '$nik',
            nama = '$nama',
            tanggal_mulai = '$tanggal_mulai',
            gaji_pokok = '$gaji_pokok',
            status_karyawan =  '$status_karyawan',
            bagian_id =  '$bagian_id'
            WHERE
            NIK = '$nik';
        ");
 
         // var_dump($nik, $koneksi->error);
         // die();
 
         if ($submit) {
             echo "
             <script>
             alert('Data Berhasil Diubah!!');
             location.href='../karyawan';
             </script>";
         }else {
             echo "
             <script>
             alert('Data Gagal Diubah!!');
             location.href='../karyawan/edit';
             </script>";
         }
 
     }else if (isset($_GET['id'])) {
        
        $delete = $koneksi->query("DELETE FROM karyawan WHERE nik = '$_GET[id]' ");
        
        if ($delete) {
            echo "
            <script>
            alert('Data Berhasil Dihapus!!');
            location.href='../karyawan';
            </script>";
        }else {
            echo "
            <script>
            alert('Data Gagal Dihapus!!');
            location.href='../karyawan/edit';
            </script>";
        }
     }

    







?>