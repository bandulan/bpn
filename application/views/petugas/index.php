<?php

$conn   = mysqli_connect("localhost", "root", "", "bpn"); //koneksi (servername,username,pass,dbname)
$r      = mysqli_query($conn, "SELECT * FROM warga");    //pilih tabel

//tes koneksi
/* <!--
<h3>Daftar Warga</h3>

	<ul class="list-group">

		<?php foreach ($warga as $mhs) : ?> 
			<li class="list-group-item">
			  <?php echo $mhs["nama"] ?>
		  
			
			  </li>
		<?php endforeach; ?>

	</ul>
	<hr>
-->
		<!--
	<h4>Kalau pake php</h4>
		<?php foreach ($r as $a) : ?> 
			<li class="list-group-item">
				  <?php echo $a["nama"] ?>
			  
				
			  </li>
		<?php endforeach; ?>


		<hr>
--> */


?>


<!-- Main content -->

<section class="content">

	<br>
	<!-- Default box -->

	<div class="container-fluid">


		<div class="row">
			<div class="col-lg-6">
				<h2>Data Pemohon</h2>
			</div>
			<div class="col-lg-6">
				<a href="<?= base_url(); ?>warga/tambah" class="btn btn-primary float-right">Tambah Data</a>

			</div>




		</div>
		<hr>
		<div class="row">

			<div class="table-responsive mx-auto">







				<table id="table_id" class="display">

					<thead>
						<tr>

							<th>KTP</th>
							<th> NAMA </th>
							<th> ALAMAT </th>
							<th> TELFON </th>

							<th>TOOLS</th>

						</tr>
					</thead>

					<tbody>
						<tr>


						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>


	<!-- /.card -->

</section>

<!-- /.content -->