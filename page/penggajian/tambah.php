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

<body>
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align : center;">Tambah Data Penggajian</h1>

    

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
                                    <input name="id" class="form-control" type="text" placeholder="Isikan id">
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;">Nik Karyawan</label>
                            <div class="col-6">
                                    <input name="karyawan_nik" class="form-control" type="number" placeholder="Isikan Nik Karyawan">
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;" >Tahun</label>
                            <div class="col-6">
                                    <input name="tahun" class="form-control" type="number" placeholder="Isikan Tahun" >
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;"  >Bulan</label>
                            <div class="col-6">
                                    <input name="bulan" class="form-control" type="number" placeholder="Isikan Bulan">
                            </div>
                            <!-- end input -->
                       </div>

                        
                       <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;"  >Gaji Bayar</label>
                            <div class="col-6">
                                    <input name="gaji_bayar" class="form-control" type="number" placeholder="Isikan Gaji Bayar" >
                            </div>
                            <!-- end input -->
                       </div>


                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="simpan"  class="btn btn-success">Simpan</button>    
                    <button type="reset" name="reset"  class="btn btn-danger">Reset</button>
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