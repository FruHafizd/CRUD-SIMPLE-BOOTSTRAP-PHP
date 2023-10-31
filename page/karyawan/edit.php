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

$data = $koneksi->query("SELECT * FROM karyawan WHERE nik = '$id' ")->fetch_array();


?>

<body>
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align : center;">Edit Data Karyawan</h1>

    

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
                                    <input name="nik" class="form-control" type="text" placeholder="Isikan NIK" value="<?= $data['nik'] ?>" readonly >
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;"  >Nama</label>
                            <div class="col-6">
                                    <input name="nama" class="form-control" type="text" placeholder="Isikan Nama" value="<?= $data['nama'] ?>" >
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;"  >Tanggal Mulai</label>
                            <div class="col-6">
                                    <input name="tanggal_mulai" class="form-control" type="date" value="<?= $data['tanggal_mulai'] ?>">
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;"  >Gaji Pokok</label>
                            <div class="col-6">
                                    <input name="gaji_pokok" class="form-control" type="number  " placeholder="Isikan Gaji Pokok" value="<?= $data['gaji_pokok'] ?>">
                            </div>
                            <!-- end input -->
                       </div>

                        <div class="row mb-3">
                            <!-- input -->
                            <label class="col-2" style="color: white;"  >Status Karyawan</label>
                            <div class="col-6">
                                    <select class="form-control" name="status_karyawan" id="">

                                        <option value="TETAP" <?= $data['status_karyawan'] == 'TETAP' ? "selected" :"" ?> >TETAP</option>
                                        <option value="KONTRAK" <?= $data['status_karyawan'] == 'KONTRAK' ? "selected" :"" ?> >KONTRAK</option>
                                        <option value="MAGANG" <?= $data['status_karyawan'] == 'MAGANG' ? "selected" :"" ?> >MAGANG</option>
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
                                <option value="<?= $row['id'] ?>"
                                <?php if ($row ['id'] == $data['bagian_id']) {
                                   echo 'selected';
                                } ?> ><?= $row['nama']; ?></option>      
                                <?php endforeach; ?>
                                </select>   
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