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
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align : center;">Bagian</h1>

    


    <section class="container">
        <div class="card">
            <div class="card-header">
                <a href="tambah" class="btn bg-primary" style="margin-left : 10px; color: white;">Tambah</a>
            </div>
            
            <div class="card-body">
                <table class="table" id="example" style="width: 100%;"  class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;                    
                            $bagian = $koneksi->query('SELECT * FROM bagian');
                            while ($data = $bagian->fetch_array()) {

                            
                        ?>
                        <tr>
                            <td><?= $no++;  ?></td>
                            <td><?= $data['id'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td>
                            <a href="edit?id=<?= $data['id'] ?>" class="btn bg-success" style="color: white;">Edit</a>
                            <a href="proses?id=<?= $data['id'] ?>" class="btn bg-danger" style="color: white;">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--footer-->
                                
    <!--end footer-->
    <!-- Optional JavaScript; choose one of the two! -->

    <?php 
    include ('../../templates/script.php');
    ?>

</body>
    

</html>

<script>
    new DataTable('#example');
</script>