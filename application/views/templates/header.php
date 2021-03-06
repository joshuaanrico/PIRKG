<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pusat Informasi dan Reservasi Kesehatan Gigi</title>
  <meta name="description" content="Webiste tentang pentingnya menjaga kesehatan gigi">
  <meta name="keywords" content="gigi, kesehatan gigi, pelayanan kesehatan gigi, edukasi gigi">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">

  <!-- Date Time Picker -->
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top"> <!-- Navigasi Bar -->
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo_pirkg.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
              <h3 style="color: white;">Pusat Informasi dan Reservasi Kesehatan Gigi</h3>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class=""><a href="<?php echo base_url(); ?>">Beranda</a></li> <!-- class="active" untuk mengaktiftan bar -->
                <li class=""><a href="<?php echo base_url(); ?>admins/reservation">Reservasi</a></li>
                <li class=""><a href="<?php echo base_url(); ?>posts">Artikel</a></li>
                <li class=""><a href="<?php echo base_url(); ?>tentang_kami">Tentang Kami</a></li>

                <?php if(!$this->session->userdata('logged_in')): ?>
                  <li class=""><a href="<?php echo base_url(); ?>users/register">Sign Up/Login</a></li>
                <?php endif; ?>
                <?php if($this->session->userdata('logged_in') && ($this->session->userdata('nama') !== 'admin')): ?>
                  <li class=""><a href="<?php echo base_url(); ?>users/profile">Profil</a></li>
                  <li class=""><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
                <?php elseif($this->session->userdata('logged_in') && ($this->session->userdata('nama') == 'admin')): ?>
                  <li class=""><a href="<?php echo base_url(); ?>posts/create">Buat Artikel</a></li>
                  <li class=""><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
                <?php endif; ?>

              </ul>
            </div>
          </div>
        </div>
      </nav> <!-- end Navigasi Bar -->

      <!-- Header -->
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
            </div>
            <div class="banner-text text-center">
            </div>
            <div class="overlay-detail text-center">
              
              <!-- welcome message-->
              <h1 style="color: white;">Selamat Datang Pada Website Kami</h1>
              <br><br><br>
              <h3 style="color: #e6e3e3; letter-spacing: 2px;">PIRKG merupakan website informasi dan reservasi kesehatan gigi Klinik Drg. Norman Fajeri. PIRKG hadir untuk memberikan wawasan mengenai pentingnya menjaga kesehatan gigi dan mulut. Selain itu PIRKG juga memberikan fasilitas seperti pemesanan reservasi untuk menemui Drg. Norman Fajeri dalam penanganan kesehatan dan pemeliharaan gigi.</h3>
              
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end Header -->
  </section>
  <!--/ end banner-->

  <!-- Flash Messages -->
  <br><br>
  <div class="container">
    <?php if($this->session->flashdata('user_registered')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedin')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedout')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_reservation')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_reservation').'</p>'; ?>
    <?php endif; ?>
  </div>