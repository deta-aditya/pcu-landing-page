<!DOCTYPE html>
<html>

<head>
  <?php include 'pages/fractions/dochead.php' ?>
</head>

<body id="plp-<?php echo $_PLP['page'] ?>">

  <div class="container-fluid">
    <div class="login-container">
      
      <div class="text-center">
        <img src="public/images/logo_white_text.svg" class="login-logo" alt="Pertamina">
        <p class="lead"><i>Landing Page E-Learning Administrator</i></p>
      </div>

      <form method="post" action="action/login" id="login-form" class="center-block"> 
        <div class="alert-container"><?php echo render_one_shot_alert(); ?></div>
        <div class="form-group">
          <input class="form-control" type="text" name="urname" placeholder="Username" required>
        </div>
        <div class="form-group">
          <input class="form-control" type="password" name="passkey" placeholder="Password" required>
        </div>
        <div class="text-center form-group">
          <button type="submit" class="btn btn-primary btn-block btn-submit">Login</button>
        </div>
      </form>

      <p class="text-center"><a href="home" class="btn btn-link">Kembali ke Halaman Depan</a></p>

    </div>
  </div>

  <?php include 'pages/fractions/docfoot.php' ?>
</body>

</html>