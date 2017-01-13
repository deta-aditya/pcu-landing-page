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
          <h1>Kelola Navigasi Utama
            <small><a href="home" target="_blank">Lihat Landing Page</a></small>
          </h1>
          <p>Jumlah link yang akan ditampilkan di <i>landing page</i> adalah <b>8 link pertama</b>.</p>
        </div>

        <?php echo render_one_shot_alert() ?>

        <table class="table table-hover">
          <tr>
            <td colspan="2">
              <a class="show text-center" href="#modal-add-nav" data-toggle="modal">
                <span class="glyphicon glyphicon-plus"></span>
                Tambah Link Baru
              </a>
            </td>
            <?php echo admin_render_navbar_navs() ?>
          </tr>
        </table>
      
      </div>

    </div>
  </div>

  <form class="modal fade form-horizontal" tabindex="-1" role="dialog" id="modal-add-nav" method="post" action="action/nav_add">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Link</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="col-sm-3" for="name">Nama Link</label>            
            <div class="col-sm-9">
              <input type="text" class="form-control" name="name" id="name" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3" for="link">Link yang Dituju</label>            
            <div class="col-sm-9">
              <div class="input-group">
                <span class="input-group-addon">https://</span>
                <input type="text" class="form-control" name="link" id="link" required>
              </div>
            </div>
          </div>
          <div class="form-group" id="put-on-form-group">
            <label class="col-sm-3" for="put_on">Simpan di</label>
            <div class="col-sm-9">
              <select class="form-control" name="put_on" id="put_on" required>
                <option value="toppest">Paling depan</option>
                <option value="downest">Paling belakang</option>
              </select>
            </div>
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