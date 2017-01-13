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

        <div class="main-title">
          <h1>Kelola Latar Parallax
          <small><a href="home" target="_blank">Lihat Landing Page</a></small>
          </h1>
          <p>Latar Parallax adalah latar belakang yang digunakan pada bagian <b>Tentang</b> dan <b>Kontak</b>.</p>
        </div>

        <?php echo render_one_shot_alert() ?>

        <form class="form-horizontal" method="post" action="action/parallax_update" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-sm-3">Latar pada Tentang</label>
            <div class="col-sm-9 file-input">
              <button type="button" class="btn btn-default file-input-trigger">Unggah Foto Baru</button>
              <input type="file" name="about_parallax_image" class="file-input-hidden">
              <div class="file-input-preview parallax" data-special="parallax-admin" style="background-image:url('<?php echo get_setting($_PLP['mysql'], 'about_parallax_image') ?>')">
              </div>
              <p class="help-block">Direkomendasikan untuk menggunakan latar yang memiliki lebar &ge; <b>1366px</b></p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3">Latar pada Kontak</label>
            <div class="col-sm-9 file-input">
              <button type="button" class="btn btn-default file-input-trigger">Unggah Foto Baru</button>
              <input type="file" name="contact_parallax_image" class="file-input-hidden">
              <div class="file-input-preview parallax" data-special="parallax-admin" style="background-image:url('<?php echo get_setting($_PLP['mysql'], 'contact_parallax_image') ?>')">
              </div>
              <p class="help-block">Direkomendasikan untuk menggunakan latar yang memiliki lebar &ge; <b>1366px</b></p>
            </div>
          </div>
          <button type="submit" class="btn btn-danger pull-right">Simpan Perubahan</button>
        </form>
      </div>

    </div>
  </div>

  <?php include 'pages/fractions/docfoot.php' ?>
</body>

</html>