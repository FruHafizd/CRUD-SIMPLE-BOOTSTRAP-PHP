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
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align : center;">Tambah Data Bagian</h1>

    

    <!-- card -->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="card-body bg-dark" >
                    <div class="form-group row">
                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;"  >ID</label>
                            <div class="col-6">
                                    <input name="id" class="form-control" type="text" placeholder="Isikan ID">
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;">Nama</label>
                            <div class="col-6">
                                    <input name="nama" class="form-control" type="text" placeholder="Isikan Nama">
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