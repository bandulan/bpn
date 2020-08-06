<?php

/*  $conn   = mysqli_connect("localhost", "root", "", "bpn"); //koneksi (servername,username,pass,dbname)
$r       = mysqli_query($conn, "SELECT * FROM warga");    //pilih tabel */

//tes koneksi


?>


<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Persil
                </h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">




    <div class="container-fluid">



        <div class="row">

            <div class="col-lg-11 table-responsive mx-auto">


                <table id="dataa" class="col-sm-12table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center;">NIB</th>
                            <th style="text-align: center;">Alamat</th>
                            <th style="text-align: center;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($persil as $p) : ?>
                            <tr>
                                <td><?= $p['nib']; ?></td>
                                <td><?= $p['alamat_persil']; ?></td>
                                <td style="text-align: center;">
                                    <a href="<?= base_url('persil/detail/');  ?><?= $p['id_persil'] ?>" class="btn btn-success btn-sm"><i class="fa fa-user"> </i> &nbsp; Detail</a>

                                </td>

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