<!DOCTYPE html>
<?php
  include('config.php');
  $q=mysqli_query($connect,'SELECT * FROM config WHERE id="1"');
  $data=mysqli_fetch_array($q);
  if($data['active']==='0'){
    header('location:apologize.php');
    //break;
  }
?>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CAREER | RS Intan Husada</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="dist/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/green.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    
    <br>
    <!-- /.PESAN KESALAHAN -->
    <?php
    if (!empty($_GET['message']) && $_GET['message'] == 'success') {
      ?>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Berhasil!</strong> Apabila memenuhi kriteria akan dikonfirmasi kembali oleh pihak HRD RS. Intan Husada untuk proses selanjutnya.
      </div>
    <?php
    } else if (!empty($_GET['message']) && $_GET['message'] == 'gagal') {
      ?>
      <div class="alert alert-error fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Kesalahan!</strong> Proses upload data gagal, pastikan koneksi internet anda stabil dan silahkan ulangi kembali.
      </div>
    <?php
    } else if (!empty($_GET['error']) && $_GET['error'] == '1') {
      ?>
      <div class="alert alert-error fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Kesalahan!</strong> File terlalu besar, silahkan kompresi file anda sampai maksimal 5mb.
      </div>
    <?php
    } else if (!empty($_GET['error']) && $_GET['error'] == '2') {
      ?>
      <div class="alert alert-error fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Kesalahan!</strong> File tidak sesuai. Pastikan dokumen yang anda upload ber-ekstensi <b>.pdf</b>.
      </div>
    <?php
    } else if (!empty($_GET['message']) && $_GET['message'] == 'duplicate') {
      ?>
      <div class="alert alert-error fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Mohon maaf!</strong> anda telah mendaftar sebelumnya.
      </div>
    <?php
    }
    ?>

    <!-- /.PESAN KESALAHAN -->
    <div class="login-box-body">
      <p class="login-box-msg">Silahkan isi form dibawah ini!</p>
      <form action="validate.php" method="post" enctype="multipart/form-data">
        <div class="form-group has-feedback">
          <select required class="form-control" name="bagian" id="bagian">
            <option value="" selected>-- Pilih bagian yang akan dilamar --</option>
            <?php
            $tampil = mysqli_query($connect,"SELECT nama FROM bagian ORDER BY nama");
            while ($w = mysqli_fetch_array($tampil)) {
              echo "<option value=$w[nama]>$w[nama]</option>";
            }

            ?>
          </select>
        </div>
        <div class="form-group has-feedback">
          <input required type="text" name="nik" id="nik" class="form-control" placeholder="Nomor Induk Kependudukan..." maxlength="16">
          <span class="glyphicon glyphicon-info-sign form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input required type="nama" name="nama" id="nama" class="form-control" placeholder="Nama lengkap sesuai KTP..." maxlength="100">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input required type="email" name="email" type="email" class="form-control" placeholder="Email aktif..." maxlength="100">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input required name="tlp" class="form-control" placeholder="No telepon aktif... (hanya angka)" maxlength="14">
          <span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
        </div>
        <small><p align="justify">* Lamaran dibuat dalam bentuk file <b>.pdf</b> dan ukuran file maksimal <b>5mb</b>.</p></small>
        <div class="form-group has-feedback">
        <input required type="file" name="fileupload" id="fileupload">
        </div>
        <div class="row">
          <div class="col-xs-8">
            <a href="https://news.rsintanhusada.com/">
              << Kembali</a> </div> <!-- /.col -->
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div><!-- /.col -->
          </div>
      </form>
    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->

  <!-- jQuery 2.1.4 -->
  <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>

</html>