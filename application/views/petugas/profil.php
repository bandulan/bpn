<?php

/* $conn   = mysqli_connect("localhost", "root", "", "bpn"); //koneksi (servername,username,pass,dbname)
$r      = mysqli_query($conn, "SELECT * FROM warga");    //pilih tabel */

//tes koneksi


?>


<!-- Main content -->

<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mx-auto">
            <div class="col">
                <h1>Profile Warga</h1>
                <a href="<?= base_url('petugas'); ?>" class="btn btn-info mt-3"><i class="fa fa-angle-left"></i>&nbsp; Kembali</a>
            </div>


        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">



    <!-- Default box -->


    <div class="container-fluid">
        <br>




        <div class="row">
            <div class="col-lg-3">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h4 style="text-align: center;">Profile</h4>
                    </div>
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="https://via.placeholder.com/300" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><?= $warga['nama']; ?></h3>



                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>NIK</b> <a class="float-right"><?= $warga['ktp']; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>NO KK</b> <a class="float-right"><?= $warga['no_kk']; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Alamat</b> <a class="float-right"><?= $warga['alamat']; ?></a>
                            </li>

                        </ul>


                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <div class="col-lg-9">

                <div class="col table-responsive">
                    <table class="table table-bordered mx-auto">
                        <thead>
                            <tr>
                                <th style="text-align: center;">#</th>
                                <th style="text-align: center;">NIB</th>
                                <th style="text-align: center;">Alamat Persil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>asd</td>
                                <td>asd</td>
                                <td>asd</td>
                            </tr>
                        </tbody>
                    </table>
                    </>






                </div>




                <!-- /.card -->
            </div>


        </div>


        <!-- /.card -->

</section>

<!-- /.content -->