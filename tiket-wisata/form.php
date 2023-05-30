<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Pemesanan Tiket</title>
    <?php 
        session_start();
      include("config.php");
      $nama_lengkap=$no_identitas=$no_hp= $tempat_wisata=$tanggal_kunjungan= "";
      $total_harga=$pengunjung_dewasa= $pengunjung_anak=0;
      //fetch all users data from database
      $result = mysqli_query($mysqli, "SELECT * FROM tempat_wisata ORDER BY id ASC");
      
      ?>
</head>
<header>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Untuk Tugas Praktek Sertifikasi JWD LSP informatika</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="index.php" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Lokasi Wisata</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Tempat Wisata Malang</h1>
          
          <p>
            
          </p>
        </div>
</section>
<div class="container">		
		<h1>Form Pemesanan</h1> 
		<form class="form-horizontal" action="form.php" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="nama">Nama Lengkap :</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama_lengkap" value="<?php echo $nama_lengkap;?>" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="alamat">No. Identitas :</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="no_identitas" minlength="16" value="<?php echo $no_identitas;?>" required>
				</div>
			</div>	
            <div class="form-group">
				<label class="control-label col-sm-2" for="alamat">No. HP :</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="no_hp" value="<?php echo $no_hp;?>" required>
				</div>
			</div>
            <div class="form-group">
                <label class="control-label col-sm-2">Tempat Wisata :</label>
                <div class="col-sm-10">
                <select class="form-control" name="tempat_wisata" value="<?php echo $tempat_wisata;?>" >
            <?php
            while ( $data = mysqli_fetch_array($result) ) {
            ?>
                <option value="<?php echo $data['nama_tempat'] ?>"><?php echo $data['nama_tempat'] ?> </option>
            <?php } ?>
                </select>
		        </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Tanggal Kunjungan :</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="start" name="tanggal_kunjungan" value="<?php echo $tanggal_kunjungan;?>" required>
		        </div>
            </div>
            <div class="form-group">
				<label class="control-label col-sm-2" for="alamat">Pengunjung Dewasa :</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="pengunjung_dewasa" value="<?php echo $pengunjung_dewasa;?>">
				</div>
			</div>
            <div class="form-group">
				<label class="control-label col-sm-3" for="alamat">Pengunjung Anak-anak :</label>
                <p class="control-label col-sm-3"><small>*Usia dibawah 12 Tahun</small></p>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="pengunjung_anak" value="<?php echo $pengunjung_anak;?>">
				</div>
			</div>

            <?php
            $harga = 160000;
            if(isset($_POST['submit'])){
                // $ambilharga= mysqli_query($mysqli, "SELECT harga FROM tempat_wisata where nama_tempat = '$tempat_wisata'");
                include("config.php");
                $nama_lengkaps = $_POST['nama_lengkap'];
                $no_identitass = $_POST['no_identitas'];
                $no_hps = $_POST['no_hp'];
                $tempat_wisatas = $_POST['tempat_wisata'];
                $tanggal_kunjungans = $_POST['tanggal_kunjungan'];
                $pengunjung_dewasas = $_POST['pengunjung_dewasa'];
                $pengunjung_anaks = $_POST['pengunjung_anak'];
                
                $harga_dewasa=$harga*$pengunjung_dewasas;
                $harga_anak=$harga*$pengunjung_anaks*0.5;
                $total_harga=$harga_dewasa+$harga_anak;
                

                $result = mysqli_query($mysqli, "INSERT INTO transaksi(nama_lengkap,no_identitas,no_hp, tempat_wisata, tanggal_kunjungan, pengunjung_dewasa, pengunjung_anak, harga_tiket, total_bayar) VALUES('$nama_lengkaps','$no_identitass','$no_hps','$tempat_wisatas','$tanggal_kunjungans','$pengunjung_dewasas', '$pengunjung_anaks', '$harga','$total_harga')");
            }
            ?>

            <div class="form-group col-4">
				<h4>Harga Tiket : Rp. <?php echo $harga ?></h4>
			</div>

            <div class="form-group col-4">
            <?php if(isset($_POST['submit'])){ ?>
                <?php
                $query =mysqli_query($mysqli, "SELECT * FROM transaksi ORDER BY id DESC LIMIT 1");
                while ( $data = mysqli_fetch_array($query) ) {
                ?>
                <h4>Total Bayar : Rp. <?php echo $data['total_bayar'] ?></h4>
                <p>Berhasil Pesan Tiket!!</p>
                <p>Nama Pemesan : <?php echo $data['nama_lengkap']?></p>
                <p>No. Identitas : <?php echo $data['no_identitas']?></p>
                <p>No. HP : <?php echo $data['no_hp']?></p>
                <p>Tempat Wisata : <?php echo $data['tempat_wisata']?></p>
                <p>Tanggal Kunjungan : <?php echo $data['tanggal_kunjungan']?></p>
                <p>Pengunjung Dewasa : <?php echo $data['pengunjung_dewasa']?></p>
                <p>Pengunjung Anak-Anak : <?php echo $data['pengunjung_anak']?></p>
                <p>Harga Tiket : <?php echo $data['harga_tiket']?></p>
                <p>Total Bayar : <?php echo $data['total_bayar']?></p>
                <?php } ?>
            <?php } ?>
			</div>

      <div class="form-group col-4">
            <?php if(isset($_POST['hitung'])){ ?>
                <?php
                $query =mysqli_query($mysqli, "SELECT * FROM transaksi ORDER BY id DESC LIMIT 1");
                while ( $data = mysqli_fetch_array($query) ) {
                ?>
                <h4>Total Bayar : Rp. <?php echo $data['total_bayar'] ?></h4>
                <p>Total Harga Biaya yang akan dipesan</p>
                <p>Nama Pemesan : <?php echo $data['nama_lengkap']?></p>
                <p>No. Identitas : <?php echo $data['no_identitas']?></p>
                <p>No. HP : <?php echo $data['no_hp']?></p>
                <p>Tempat Wisata : <?php echo $data['tempat_wisata']?></p>
                <p>Tanggal Kunjungan : <?php echo $data['tanggal_kunjungan']?></p>
                <p>Pengunjung Dewasa : <?php echo $data['pengunjung_dewasa']?></p>
                <p>Pengunjung Anak-Anak : <?php echo $data['pengunjung_anak']?></p>
                <p>Harga Tiket : <?php echo $data['harga_tiket']?></p>
                <p>Total Bayar : <?php echo $data['total_bayar']?></p>
                <?php } ?>
            <?php } ?>
			</div>

      <div class="form-group col-4">
            <?php if(isset($_DELETE['cancel'])){ ?>
              <?php mysqli_query($mysqli, "DELETE FROM transaksi ORDER BY id DESC LIMIT 1"); ?>
            <?php } ?>
			</div>
            

            <div style="text-align: center">
            <button type="submit" class="btn btn-secondary" name="hitung" style="width:200px" value="hitung">Hitung Total Bayar</button>
            &nbsp;&nbsp;
            <button type="submit" class="btn btn-secondary" name="submit" style="width:200px" value="submit">Pesan Tiket</button>
            &nbsp;&nbsp;
            <button type="cancel" class="btn btn-secondary" name="cancel" style="width:200px">Cancel</button>
            </div>

			
		</form>		
	</div>
    </main>

    <footer class="text-muted">
        <div class="container mt-100">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>

        <p>Copyright 2022.</p>
        </div>
    </footer>
</html>