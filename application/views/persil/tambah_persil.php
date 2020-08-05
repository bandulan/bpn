<?php

$conn   = mysqli_connect("localhost", "root", "", "bpn"); //koneksi (servername,username,pass,dbname)
$r      = mysqli_query($conn, "SELECT * FROM persil");    //pilih tabel

//tes koneksi


?>


<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <br>
    <h1 align="center" class="">Tambah Warga</h1>
    <br>
    <div class="row">

        <div class="col-lg-6 mx-auto">

            <a href="<?= base_url(); ?>persil" class="btn btn-danger"><i class="fa fa-backward"></i> Kembali</a>
            <form action="" method="post">

                <div class="form-group">
                    <label for="ktp">No. KTP</label>
                    <input type="number" class="form-control" id="ktp" name="ktp" placeholder="Nomor KTP">
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Sesuai KTP">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Domisili">
                </div>

                <div class="form-group">
                    <label for="telfon">Telfon</label>
                    <input type="number" class="form-control" id="telfon" name="telfon" placeholder="Nomor Telfon">
                </div>

                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama">
                </div>

                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
                </div>

                <div class="form-group">
                    <label for="no_kk">Nomor KK</label>
                    <input type="number" class="form-control" id="no_kk" name="no_kk" placeholder="Nomor KK">
                </div>

                <div class="form-group">
                    <label for="tempat_lhr">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lhr" name="tempat_lhr" placeholder="Tempat Lahir">
                </div>

                <div class="form-group">
                    <label for="tanggal_lhr">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lhr" name="tanggal_lhr" placeholder="Tanggal Lahir">
                </div>

                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="text" class="form-control" id="foto" name="foto" placeholder="Foto">
                </div>



                <button type="submit" class="btn btn-primary float-right" name="tambah">Daftar</button>



            </form>
        </div>
    </div>
    <br>
    <br>

    <!-- /.card -->

</section>
<!-- /.content -t