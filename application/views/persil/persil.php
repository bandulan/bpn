<?php

$conn   = mysqli_connect("localhost", "root", "", "bpn"); //koneksi (servername,username,pass,dbname)


//tes koneksi


?>


<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mx-auto">
            <div class="col">
                <h1>Detail Persil</h1>
                <a href="javascript:history.back()" class="btn btn-info mt-3"><i class="fa fa-angle-left"></i>&nbsp; Kembali</a>

            </div>


        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">



    <!-- Default box -->


    <div class="container-fluid">

        <div class="row">
            <div class="col-md-3">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h4 style="text-align: center;">Data Pemilik</h4>
                    </div>
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="https://via.placeholder.com/300" alt="User profile picture">
                        </div>
                        <?php
                        $id = $persil['id_pemilik'];
                        $sql = mysqli_query($conn, "SELECT * FROM `warga` WHERE `id_warga`='$id'");
                        $a = mysqli_fetch_assoc($sql);


                        ?>

                        <h3 class="profile-username text-center"><?= $a['nama']; ?></h3>



                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>NIK</b> <a class="float-right">217106140819450001</a>
                            </li>


                        </ul>
                        <div class="row mx-auto">
                            <a href="<?= base_url('petugas/detail/') . $a['id_warga']; ?>" class="btn btn-primary mx-auto">Profil Pemilik</a>

                        </div>


                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 class="text-center">Data Persil</h4>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">


                        <strong><i class="far fa-map mr-1"></i>
                            Alamat</strong>

                        <p class="text-muted">
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <span class="text">Alamat Persil</span> <a class="float-right"><?= $persil['alamat_persil']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <span class="text">Desa</span> <a class="float-right"><?= $persil['desa']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <span class="text">Kelurahan</span> <a class="float-right"><?= $persil['kelurahan']; ?></a>
                                </li>


                            </ul>

                        </p>


                        <strong><i class="far fa-map mr-1"></i>
                            Batas Persil</strong>

                        <p class="text-muted">
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <span class="text">Utara</span> <a class="float-right"><?= $persil['batas_utara']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <span class="text">Selatan</span> <a class="float-right"><?= $persil['batas_selatan']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <span class="text">Timur</span> <a class="float-right"><?= $persil['batas_timur']; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <span class="text">Barat</span> <a class="float-right"><?= $persil['batas_barat']; ?></a>
                                </li>

                            </ul>

                        </p>

                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="col">
                    <div class="card card-outline card-success">

                        <img class="card-img-top" src="https://via.placeholder.com/1000x460" alt="Card image cap" height="460px">
                        <div class="card-body">
                            <p class="card-text">Foto Persil</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-6 embed-responsive embed-responsive-3by1">
                                <img src="https://via.placeholder.com/800" class="card-img embed-responsive-item" alt="..." height="500px">
                            </div>
                            <div class="col-md-6">
                                <div class="card-header">
                                    <h3 class="text-center">Detail Persil</h3>
                                </div>
                                <div class="card-body">
                                    <strong><i class="fas fa-pencil-alt mr-1"></i> NIB</strong>
                                    <p class="text-muted">17081945</p>



                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Alamat Persil</strong>
                                    <p class="text-muted">
                                        <span class="tag tag-danger">Hacker Way Menlo Park, </span>
                                        <span class="tag tag-success">California , </span>
                                        <span class="tag tag-info">Kabupaten Lampung Selatan. </span>

                                    </p>


                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Koordinat</strong>

                                    <p class="text-muted">1.1482292,104.0156225</p>
                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






            </div>




            <!-- /.card -->
        </div>


    </div>


    <!-- /.card -->

</section>

<!-- /.content -->