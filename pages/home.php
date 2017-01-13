<!DOCTYPE html>
<html>

<head>
  <?php include 'fractions/dochead.php' ?>
</head>

<body id="plp-<?php echo $_PLP['page'] ?>">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#plp-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="public/images/logo.svg" alt="Pertamina">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="plp-navbar-collapse">
        <div class="navbar-right">
          <a href="<?php echo get_setting($_PLP['mysql'], 'link_to_lms') ?>login" class="btn btn-primary navbar-btn">Log In</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Home</a></li>
          <?php echo render_navbar_navs($_PLP['mysql']); ?>
        </ul>
      </div>
    </div>
  </nav>

  <div id="plp-home-slideshow" class="carousel slide" data-ride="carousel">
  
    <ol class="carousel-indicators">
      <?php echo render_slideshow_indicators($_PLP['mysql']); ?>
    </ol>

    <div class="carousel-inner" role="listbox">
      <?php echo render_slides($_PLP['mysql']); ?>
    </div>

    <a class="left carousel-control" href="#plp-home-slideshow" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#plp-home-slideshow" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>

  <div id="plp-home-about" class="parallax" style="background-image: url('<?php echo get_setting($_PLP['mysql'], 'about_parallax_image') ?>')">
    <div class="jumbotron">
      <div class="container text-center">
        <h3>Tentang Kami</h3>
        <?php echo render_about_text($_PLP['mysql']); ?>
      </div>
    </div>
  </div>

  <div id="plp-home-courses"
    data-fetch-from="<?php echo get_setting($_PLP['mysql'], 'link_to_lms') ?>" 
    data-fetch-limit="<?php echo get_setting($_PLP['mysql'], 'courses_shown') ?>">
    <div class="container">
      <h3 class="text-center">Courses</h3>
      <div class="row">
        <div class="loading">Loading...</div>
      </div>
      <p class="text-center">
        <a class="btn btn-link" href="<?php echo get_setting($_PLP['mysql'], 'link_to_lms') ?>" target="_blank">Selengakpnya di E-Learning &raquo;</a>
      </p>
    </div>
  </div>

  <!-- <hr>

  <div id="plp-home-library" 
    data-fetch-from="<?php echo get_setting($_PLP['mysql'], 'link_to_library') ?>" 
    data-fetch-limit="<?php echo get_setting($_PLP['mysql'], 'library_shown') ?>">
    <div class="container">
      <h3 class="text-center">Library</h3>
      <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="panel panel-default library-item">
            <div class="panel-body">
              <h4>Judul Item Library</h4>
              <span class="item-logo glyphicon glyphicon-book"></span>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="panel panel-default library-item">
            <div class="panel-body">
              <h4>Judul Item Library</h4>
              <span class="item-logo glyphicon glyphicon-book"></span>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="panel panel-default library-item">
            <div class="panel-body">
              <h4>Judul Item Library</h4>
              <span class="item-logo glyphicon glyphicon-book"></span>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="panel panel-default library-item">
            <div class="panel-body">
              <h4>Judul Item Library</h4>
              <span class="item-logo glyphicon glyphicon-book"></span>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="panel panel-default library-item">
            <div class="panel-body">
              <h4>Judul Item Library</h4>
              <span class="item-logo glyphicon glyphicon-book"></span>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="panel panel-default library-item">
            <div class="panel-body">
              <h4>Judul Item Library</h4>
              <span class="item-logo glyphicon glyphicon-book"></span>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="panel panel-default library-item">
            <div class="panel-body">
              <h4>Judul Item Library</h4>
              <span class="item-logo glyphicon glyphicon-book"></span>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="panel panel-default library-item">
            <div class="panel-body">
              <h4>Judul Item Library</h4>
              <span class="item-logo glyphicon glyphicon-book"></span>
            </div>
          </div>
        </div>

      </div>
      <p class="text-center">
        <a class="btn btn-link" href="<?php echo get_setting($_PLP['mysql'], 'link_to_library') ?>" target="_blank">Selengakpnya di Library &raquo;</a>
      </p>
    </div>
  </div> -->
  
  <div id="plp-home-contact" class="parallax" style="background-image: url('<?php echo get_setting($_PLP['mysql'], 'contact_parallax_image') ?>')">
    <div class="jumbotron">
      <div class="container text-center">
        <p><a href="<?php echo get_setting($_PLP['mysql'], 'link_to_contact') ?>" class="btn btn-lg btn-primary">Kontak Kami</a></p>
        <p>atau hubungi <b>Pertamina E-Learning</b>
          <br><span class="phone"><?php echo get_setting($_PLP['mysql'], 'contact_number') ?><span>
        </p>
      </div>
    </div>
  </div>

  <div id="plp-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-2">
          <a href="<?php echo get_setting($_PLP['mysql'], 'link_to_main') ?>">
            <img src="public/images/logo.svg" alt="Pertamina" class="footer-logo">
          </a>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10">
          <div class="pull-right text-right copyright">
            <p>Tampilan terbaik menggunakan Mozilla Firefox dan Google Chrome (update Desember 2016).</p>
            <p>&copy; <?php echo date('Y') ?> PT Pertamina (Persero). Semua hak telah diberikan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php include 'fractions/docfoot.php' ?>
</body>

</html>