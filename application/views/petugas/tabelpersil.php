<?php

/*  $conn   = mysqli_connect("localhost", "root", "", "bpn"); //koneksi (servername,username,pass,dbname)
$r       = mysqli_query($conn, "SELECT * FROM warga");    //pilih tabel */

//tes koneksi


?>


<!-- Main content -->

<section class="content">


    <!-- Default box -->
    <h2>Data Persil</h2>

    <div class="container-fluid">



        <div class="row">

            <div class="col-lg-11 table-responsive mx-auto">


                <table id="dataa" class="col-sm-12table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>NIB</td>
                            <td>Alamat</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($persil as $p) : ?>
                            <tr>
                                <td><?= $p['nib']; ?></td>
                                <td><?= $p['alamat']; ?></td>
                                <td style="text-align: center;">
                                    <a href="" class="badge badge-primary" style="align-items: center;"><i class="fa fa-edit"></i>edit</a>
                                    <a href="" class="badge badge-danger mx-1"><i class="fa fa-trash"></i>hapus</a>
                                    <a href="" class="badge badge-success"><i class="fa fa-user"></i>detail</a></td>
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