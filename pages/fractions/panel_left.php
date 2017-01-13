      <div class="col-xs-3 panel-left">
        
        <img src="public/images/logo_white_text.svg" class="admin-logo" alt="Pertamina">
        
        <ul class="nav nav-pills nav-stacked" id="admin-nav">
          <li role="presentation" <?php if ($_PLP['subpage'] === 'dashboard') echo 'class="active"' ?>><a href="admin/dashboard">Dasbor</a></li>
          <li role="presentation" <?php if ($_PLP['subpage'] === 'slideshow') echo 'class="active"' ?>><a href="admin/slideshow">Kelola Slideshow</a></li>
          <li role="presentation" <?php if ($_PLP['subpage'] === 'parallax') echo 'class="active"' ?>><a href="admin/parallax">Kelola Latar Parallax</a></li>
          <li role="presentation" <?php if ($_PLP['subpage'] === 'about') echo 'class="active"' ?>><a href="admin/about">Kelola Tentang</a></li>
          <li role="presentation" <?php if ($_PLP['subpage'] === 'navbar') echo 'class="active"' ?>><a href="admin/navbar">Kelola Navigasi Utama</a></li>
          <li role="presentation" <?php if ($_PLP['subpage'] === 'config') echo 'class="active"' ?>><a href="admin/config">Konfigurasi</a></li>
          <li role="presentation"><a class="logout" href="action/logout">Log Out</a></li>
        </ul>

        <div class="copyright">
          <p>Tampilan terbaik menggunakan Mozilla Firefox dan Google Chrome (update Desember 2016).</p>
          <p>&copy; <?php echo date('Y') ?> PT Pertamina (Persero). Semua hak telah diberikan.</p>
        </div>
      </div>