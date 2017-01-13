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
          <h1>Kelola Tentang
          <small><a href="home" target="_blank">Lihat Landing Page</a></small>
          </h1>
        </div>

        <?php echo render_one_shot_alert() ?>

        <form method="post" action="action/about_update">
          <div class="form-group">
            <label>Konten Tentang</label>
            <textarea class="form-control tinymce-enabled" name="content">
              <?php echo render_about_text($_PLP['mysql']) ?>
            </textarea>
          </div>
          <button type="submit" class="btn btn-danger pull-right">Simpan Perubahan</button>
        </form>
      </div>

    </div>
  </div>

  <script src="vendor/tinymce-4.1.7/tinymce.min.js"></script>
  <?php include 'pages/fractions/docfoot.php' ?>
</body>

</html>