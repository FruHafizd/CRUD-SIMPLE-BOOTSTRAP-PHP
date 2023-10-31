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
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align : center;">Tambah Data Karyawan</h1>

    

    <!-- card -->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="card-body bg-dark" >
                    <div class="form-group row">
                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;"  >NIK</label>
                            <div class="col-6">
                                    <input name="nik" class="form-control" type="text" placeholder="Isikan NIK">
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;"  >Nama</label>
                            <div class="col-6">
                                    <input name="nama" class="form-control" type="text" placeholder="Isikan Nama">
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;"  >Tanggal Mulai</label>
                            <div class="col-6">
                                    <input name="tanggal_mulai" class="form-control" type="date" >
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;"  >Gaji Pokok</label>
                            <div class="col-6">
                                    <input name="gaji_pokok" class="form-control" type="number  " placeholder="Isikan Gaji Pokok">
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;"  >Status Karyawan</label>
                            <div class="col-6">
                                    <select class="form-control" name="status_karyawan" id="">
                                        <option value="">--Silahkan Pilih Status Karyawan--</option>
                                        <option value="TETAP">TETAP</option>
                                        <option value="KONTRAK">KONTRAK</option>
                                        <option value="MAGANG">MAGANG</option>
                                    </select>
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                        <!-- input -->
                            <label class="col-2" style="color: white;"  >Bagian</label>
                            <div class="col-6">
                            <select class="form-control" name="bagian_id" id="">
                            <option value="">--Silahkan Pilih Bagian--</option>
                                <?php 
                                    $bagian = $koneksi->query('SELECT * FROM bagian');

                                    foreach ($bagian as $row) :
                                        

                                ?>  
                                <option value="<?= $row['id'] ?>"><?= $row['nama']; ?></option>      
                                <?php endforeach; ?>
                                </select>   
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