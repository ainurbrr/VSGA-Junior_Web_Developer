<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
    <title>Pemesanan Tiket</title>
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
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
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
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Tiket Wisata</strong>
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
      <?php 
      //create database connection using config file
      include("config.php");
      
      //fetch all users data from database
      $result = mysqli_query($mysqli, "SELECT * FROM tempat_wisata ORDER BY id ASC");
      
      ?>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="card-deck">
            <?php
            while ( $data = mysqli_fetch_array($result) ) {
            ?>
            <div class="card col-md-4">
              
                <img class="card-img-top" src="<?php echo $data['link_pict'] ?>" alt="Card image cap" height="300px" width="200px">
                <iframe  height="300px" width="330px" src="<?php echo $data['link_yt']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                  <h3><?php echo $data['nama_tempat'] ?></h3>
                  <p class="card-text"><?php echo $data['deskripsi'] ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="<?php echo $data['link_yt'] ?>"><button type="button" class="btn btn-sm btn-outline-secondary" >View Video</button></a>
                      <a href="<?php echo $data['link_map'] ?>"><button type="button" class="btn btn-sm btn-outline-secondary" >View Maps</button></a>
                      
                    </div>
                    <small class="text-muted">Rp. <?php echo $data['harga'] ?></small>
                  </div>
                </div>
              
            </div>
            <?php } ?>
            </div>
            

            <div class="container" style="text-align:center">
            <a href="form.php" class="btn btn-secondary my-2">Pesan Sekarang</a>
            </div>
            
    </main>

    <footer class="text-muted">
      <div class="container mt-100">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Copyright 2022</p>
      </div>
    </footer>
</html>