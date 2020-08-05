<?php

$conn   = mysqli_connect("localhost", "root", "", "bpn"); //koneksi (servername,username,pass,dbname)
$result       = mysqli_query($conn, "SELECT * FROM warga");    //pilih tabel
$r      = mysqli_fetch_assoc($result);



//tes koneksi


?>


<!-- Main content -->

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Warga
                </h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">


    <!-- Default box -->


    <div class="container-fluid">



        <div class="row">

            <div class="col-lg-11  table-responsive mx-auto">


                <table id="dataa" class="col-sm-12 table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>KTP</td>
                            <td>Nama</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($warga as $w) : ?>
                            <tr>
                                <td><?= $w['ktp']; ?></td>
                                <td><?= $w['nama']; ?></td>
                                <td style="text-align: center;">

                                    <a href="<?= base_url('petugas/detail/');  ?><?= $w['id_warga'] ?>" class="btn btn-success btn-sm"><i class="fa fa-user"> </i> &nbsp; Detail</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>




            <!-- /.card -->
        </div>


    </div>


    <!-- /.card -->

</section>

<!-- /.content -->