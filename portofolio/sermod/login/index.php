<?php
include "proses.php";
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Daftar/Masuk</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animate.css" />
  
</head>

<body>
  <div class="form wow bounceInUp">
    <center><a href="../index.php"><img src="../images/logo.png"></a></center>
    <br>
    <ul class="tab-group">
      <li class="tab active"><a href="#signup">Daftar</a></li>
      <li class="tab"><a href="#login">Masuk</a></li>
    </ul>

    <div class="tab-content">
      <div id="signup">   
        <h1>Form Pesanan</h1>

          <form action="do_register.php" method="post">

            <!-- <div class="top-row"> -->
            <div class="field-wrap">
              <label>
                Nama<span class="req">*</span>
              </label>
              <input type="text" name="nama" required autocomplete="off" />
            </div>

<!--             <div class="field-wrap">
              <label>
                Email<span class="req">*</span>
              </label>
              <input type="email" name="email" required autocomplete="off"/>
            </div>
          </div> -->

          <div class="field-wrap">
            <label>
              Alamat lengkap<span class="req">*</span>
            </label>
            <input type="text" name="alamat" required autocomplete="off"/>
          </div>
          
<!--           <div class="top-row">
            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input type="password" name="password" required autocomplete="off"/>
            </div> -->

            <div class="field-wrap">
              <label>
                No. Handphone<span class="req">*</span>
              </label>
              <input type="text" name="nohp" required autocomplete="off"/>
            </div>
            <!-- </div> -->

            <div class="field-wrap"><center>
              <select required="required" style="width: 100%;" class="form-control" name="motor">
                <option value=0 selected>- Pilih Jenis Motor -</option>
                <option value=Motor_Matic>Motor Matic</option>
                <option value=Motor_Sport>Motor Sport</option>
              </select>
            </center>
          </div>

          <div class="field-wrap"><center>
            <select required="required" style="width: 100%;" class="form-control" name="servis">
              <option value=0 selected>- Pilih Jenis Servis -</option>
              <option value=Basic_package>Basic Package</option>
              <option value=Professional_package>Professional Package</option>
              <option value=Advance_package>Advance Package</option>
            </select>
          </center>
        </div>

        <center><div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div></center>
        <br>
        <button type="submit" name="submit" class="button button-block"/>Order Now</button>

      </form>

    </div>

    <div id="login">   
      <h1>Admin Login</h1>

      <form action="do_login.php" method="post">

        <div class="field-wrap">
          <label>
            Username<span class="req">*</span>
          </label>
          <input name="username" type="text" required autocomplete="off"/>
        </div>

        <div class="field-wrap">
          <label>
            Password<span class="req">*</span>
          </label>
          <input name="password" type="password" required autocomplete="off"/>
        </div>

        <button type="submit" class="button button-block"/>Login</button>

      </form>

    </div>

  </div><!-- tab-content -->

</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>
<script src="js/wow.js"></script>
<script>
  new WOW().init();
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>
