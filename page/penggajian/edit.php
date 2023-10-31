<?php 
    require_once '../../config/config.php';
    require_once '../../config/koneksi.php';
?>
<!doctype html>
<html lang="en">

<?php 
    include ('../../templates/head.php');
?>

<!-- Navbar -->
<?php 
    include('../../templates/navbar.php');
?>
<!-- End Navbar -->

<?php 

$id = $_GET['id'];

$data = $koneksi->query("SELECT * FROM penggajian WHERE id = '$id' ")->fetch_array();


?>



<body>
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align : center;">Edit Data Penggajian</h1>

    

    <!-- card -->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="card-body bg-dark" >
                    <div class="form-group row">
                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;" >ID</label>
                            <div class="col-6">
                                    <input name="id" class="form-control" type="text" placeholder="Isikan id" value="<?= $data['id'] ?>" readonly >
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;">Nik Karyawan</label>
                            <div class="col-6">
                                    <input name="karyawan_nik" class="form-control" type="number" placeholder="Isikan Nik Karyawan" value="<?= $data['karyawan_nik'] ?>" >
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;" >Tahun</label>
                            <div class="col-6">
                                    <input name="tahun" class="form-control" type="number" placeholder="Isikan Tahun"  value="<?= $data['tahun'] ?>">
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;"  >Bulan</label>
                            <div class="col-6">
                                    <input name="bulan" class="form-control" type="number" placeholder="Isikan Bulan" value="<?= $data['bulan'] ?>">
                            </div>
                            <!-- end input -->
                       </div>

                        
                       <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;"  >Gaji Bayar</label>
                            <div class="col-6">
                                    <input name="gaji_bayar" class="form-control" type="number" placeholder="Isikan Gaji Bayar" value="<?= $data['gaji_bayar'] ?>">
                            </div>
                            <!-- end input -->
                       </div>


                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="edit"  class="btn btn-success">Edit</button>
                </div>
            </div>
        </form>
    </section>

    
    <!-- Optional JavaScript; choose one of the two! -->
    <?php 
    include ('../../templates/script.php');
    ?>

</body>
    

</html>
<script>
    new DataTable('#example');
</script>