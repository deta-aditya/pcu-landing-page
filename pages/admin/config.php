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
          <h1>Konfigurasi
          <small><a href="home" target="_blank">Lihat Landing Page</a></small>
          </h1>
        </div>

        <?php echo render_one_shot_alert() ?>

        <form class="form-horizontal" method="post" action="action/settings_update" enctype="multipart/form-data">
          <!-- <div class="form-group">
            <label class="col-sm-3">Logo pada Landing Page</label>
            <div class="col-sm-9 file-input file-input-logo">
              <button type="button" class="btn btn-default file-input-trigger">Unggah Foto Baru</button>
              <input type="file" name="logo" class="file-input-hidden">
              <div class="file-input-preview">
                <img src="public/images/logo.svg" alt="Logo pada Landing Page" accept=".svg">
              </div>
              <p class="help-block">Gunakan gambar dengan format <b>Scalable Vector Graphic (SVG)</b> agar gambar tidak pecah.</p>
            </div>
          </div> -->
          <div class="form-group">
            <label class="col-sm-3">Jumlah Course yang Ditampilkan</label>
            <div class="col-sm-9">
              <p class="help-block">
                Berikut adalah jumlah course yang ditampilkan di landing page. 
                <br><b>Pengaturan awal: 8</b>
              </p>
              <input type="number" class="form-control" name="courses_shown" value="<?php echo get_setting($_PLP['mysql'], 'courses_shown') ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3">Token Webservice Moodle E-Learning Pertamina</label>
            <div class="col-sm-9">
              <p class="help-block">
                Token di bawah ini digunakan untuk mengakses Webservice pada Moodle E-Learning Pertamina
                <br><b>Dimohon untuk tidak sembarangan dalam mengubah pengaturan ini!</b>
              </p>
              <input type="text" class="form-control" name="token_to_lms" value="<?php echo get_setting($_PLP['mysql'], 'token_to_lms') ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3">Alamat Website Pertamina</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="link_to_main" value="<?php echo get_setting($_PLP['mysql'], 'link_to_main') ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3">Alamat E-Library Pertamina</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="link_to_library" value="<?php echo get_setting($_PLP['mysql'], 'link_to_library') ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3">Alamat Moodle E-Learning Pertamina</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="link_to_lms" value="<?php echo get_setting($_PLP['mysql'], 'link_to_lms') ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3">Alamat E-mail pada Kontak</label>
            <div class="col-sm-9">
              <p class="help-block">
                Alamat di bawah ini digunakan pada tombol "Kontak Kami" pada bagian Kontak di landing page
              </p>
              <input type="text" class="form-control" name="link_to_contact" value="<?php echo get_setting($_PLP['mysql'], 'link_to_contact') ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3">Nomor Telepon pada Kontak</label>
            <div class="col-sm-9">
              <p class="help-block">
                Nomor di bawah ini ditampilkan pada Kontak di landing page
              </p>
              <input type="text" class="form-control" name="contact_number" value="<?php echo get_setting($_PLP['mysql'], 'contact_number') ?>">
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