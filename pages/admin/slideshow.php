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
          <h1>Kelola Slideshow
            <small><a href="home" target="_blank">Lihat Landing Page</a></small>
            <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#modal-add-slide">Tambah Slide</button>
          </h1>
          <p>Slide yang akan ditampilkan di <i>landing page</i> adalah <b>5 slide pertama</b>.</p>
        </div>

        <?php echo render_one_shot_alert() ?>

        <div class="row slides-container">
          <?php echo admin_render_slides(); ?>
        </div>
      
      </div>

    </div>
  </div>

  <form class="modal fade" tabindex="-1" role="dialog" id="modal-add-slide" method="post" action="action/slide_add" enctype="multipart/form-data">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Slide</h4>
        </div>
        <div class="modal-body">
          <p>Direkomendasikan gambar yang diunggah berukuran 1366 &times; 768 pixels atau lebih besar dengan rasio sama (16:9).</p>
          <div class="form-group file-input text-center" id="input-slide">
            <input type="file" name="image" class="file-input-hidden">
            <div class="file-input-preview">
              <img src="#" alt="Gambar yang diunggah" style="display:none">
            </div>
            <button type="button" class="btn btn-default file-input-trigger">Unggah Foto</button>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Simpan</button>
        </div>
      </div>
    </div>
  </form>

  <?php include 'pages/fractions/docfoot.php' ?>
</body>

</html>