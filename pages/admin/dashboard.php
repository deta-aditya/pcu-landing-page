<!DOCTYPE html>
<html>

<head>
  <?php include 'pages/fractions/dochead.php' ?>
</head>

<body id="plp-<?php echo $_PLP['page'] ?>">

  <div class="container-fluid">
    <div class="row">
      
      <?php include 'pages/fractions/panel_left.php' ?>

      <div class="col-xs-9 panel-right" id="panel-<?php echo $_PLP['subpage'] ?>">
        <h1 class="text-center">Selamat datang <?php echo $_SESSION['admin'] ?></h1>
        <p class="text-center">Pilih salah satu tombol di bawah untuk memilih aksi pengaturan <i>landing page</i>.</p>

        <div class="row panel-container">

          <div class="col-xs-4">
            <div class="panel panel-default">
              <a href="admin/slideshow" class="panel-body text-center">
                <h4>Kelola Slideshow</h4>
                <span class="figure glyphicon glyphicon-blackboard"></span>
              </a>
            </div>
          </div>

          <div class="col-xs-4">
            <div class="panel panel-default">
              <a href="admin/parallax" class="panel-body text-center">
                <h4>Kelola Latar Parallax</h4>
                <span class="figure glyphicon glyphicon-picture"></span>
              </a>
            </div>
          </div>

          <div class="col-xs-4">
            <div class="panel panel-default">
              <a href="admin/about" class="panel-body text-center">
                <h4>Kelola Tentang</h4>
                <span class="figure glyphicon glyphicon-align-center"></span>
              </a>
            </div>
          </div>

          <div class="col-xs-4">
            <div class="panel panel-default">
              <a href="admin/navbar" class="panel-body text-center">
                <h4>Kelola Navigasi Utama</h4>
                <span class="figure glyphicon glyphicon-option-horizontal"></span>
              </a>
            </div>
          </div>

          <div class="col-xs-4">
            <div class="panel panel-default">
              <a href="admin/config" class="panel-body text-center">
                <h4>Konfigurasi</h4>
                <span class="figure glyphicon glyphicon-cog"></span>
              </a>
            </div>
          </div>

          <div class="col-xs-4">
            <div class="panel panel-default">
              <a href="action/logout" class="panel-body text-center">
                <h4>Logout</h4>
                <span class="figure glyphicon glyphicon-log-out"></span>
              </a>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

  <?php include 'pages/fractions/docfoot.php' ?>
</body>

</html>