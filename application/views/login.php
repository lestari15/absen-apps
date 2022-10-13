<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    
    <!-- <link rel="stylesheet" href="fonts/icomoon/style.css"> -->
    <link rel="stylesheet" href="<?php echo base_url("/assets/login2/fonts/icomoon/style.css")?>">

    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url("/assets/login2/css/owl.carousel.min.css")?>">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url("/assets/login2/css/bootstrap.min.css")?>">
    
    <!-- Style -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="<?php echo base_url("/assets/login2/css/style.css")?>">

    <title>Aplikasi Absensi Wajah</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
            
          <!-- <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid"> -->
          <img src="<?php echo base_url("/assets/login2/images/9858-removebg-preview (1).png")?>" alt="Image" class="img-fluid">
          <form action="<?php echo base_url("karyawan/absen_karyawan")?>"  >
          <input type="submit" value="Mulai Absen" class="btn text-white btn-block btn-primary">
          </form>
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Masuk Ke <strong>Aplikasi Absensi Wajah</strong></h3>
              <p class="mb-4">Masuk sebagai admin untuk melakukan manajemen absensi</p>
              
            </div>
            <form action="<?php echo base_url('login/do_login')?>" method="post">
            <div>
            <?php if(isset($_SESSION['message']['msg'])): ?>
					<div id="message">
						<!-- message -->
						<div class="alert <?php echo $_SESSION['message']['color']?>">
							<strong><font size="3"><?php echo $_SESSION['message']['title']?></font></strong>
							<font size="2"><?php echo $_SESSION['message']['msg']?></font>
						</div>
						<!-- message end -->
					</div>
				<?php endif; ?>
            </div>
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <!-- <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>  -->
              </div>

              <input type="submit" value="Masuk" class="btn text-white btn-block btn-primary">


            </form>
            <br>
            <div class="d-flex mb-5 align-items-center">
                <!-- <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                  //karyawan/absen_karyawan
                </label> -->
                </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

 
    <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
    <script src="<?php echo base_url("/assets/login2/js/jquery-3.3.1.min.js")?>"></script>
    <!-- <script src="js/popper.min.js"></script> -->
    <script src="<?php echo base_url("/assets/login2/js/popper.min.js")?>"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="<?php echo base_url("/assets/login2/js/bootstrap.min.js")?>"></script>
    <!-- <script src="js/main.js"></script> -->
    <script src="<?php echo base_url("/assets/login2/js/main.js")?>"></script>
  </body>
</html>