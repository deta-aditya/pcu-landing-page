<?php

const PLP_NAVBAR_NAVS_LIMIT = 8;
const PLP_FOOTER_NAVS_LIMIT = 12;
const PLP_SLIDES_LIMIT = 8;
const URL_FRACTION_LIMIT = 4;

function render_navbar_navs($con) {
  $query = mysqli_query($con, 'SELECT * FROM navbar_navs ORDER BY `index` DESC LIMIT 0,'. PLP_NAVBAR_NAVS_LIMIT) or die(mysqli_error($con));
  $result = '';

  while ($records = mysqli_fetch_assoc($query)) {
    $result .= '<li><a href="'. $records['link'] .'" target="_blank">'. $records['name'] .'</a></li>';
  }

  return $result;
}

function render_footer_navs($con) {
  $query = mysqli_query($con, 'SELECT * FROM footer_navs ORDER BY `index` DESC LIMIT 0,'. PLP_FOOTER_NAVS_LIMIT) or die(mysqli_error($con));
  $result = '';

  while ($records = mysqli_fetch_assoc($query)) {
    $result .= '<li><a href="'. $records['link'] .'">'. $records['name'] .'</a></li>';
  }

  return $result;
}

function render_slideshow_indicators($con) {
  $query = mysqli_query($con, 'SELECT * FROM slides ORDER BY `index` DESC LIMIT 0,'. PLP_SLIDES_LIMIT) or die(mysqli_error($con));
  $numrows = mysqli_num_rows($query);
  $result = '';

  for ($i = 0; $i < $numrows; $i++) {
    $active = $i == 0 ? ' class="active"' : '';
    $result .= '<li data-target="#plp-home-slideshow" data-slide-to="'. $i .'"'. $active .'></li>';
  }

  return $result;
}

function render_slides($con) {
  $query = mysqli_query($con, 'SELECT * FROM slides ORDER BY `index` DESC LIMIT 0,'. PLP_SLIDES_LIMIT) or die(mysqli_error($con));
  $result = '';

  for ($inc = 0; $records = mysqli_fetch_assoc($query); $inc++) {
    $active = $inc == 0 ? ' active' : '';
    $result .= '<div class="item'. $active .'">';
    $result .= '  <img src="'. $records['image'] .'" alt="Slideshow">';
    $result .= '</div>';
  }

  return $result;
}

function admin_render_slides() {
  global $_PLP;
  $query = mysqli_query($_PLP['mysql'], 'SELECT * FROM slides ORDER BY `index` DESC') or die(mysqli_error($_PLP['mysql']));
  $numrows = mysqli_num_rows($query);
  $result = '';

  for ($i = 0; $records = mysqli_fetch_assoc($query); $i++) {

    $result .= '<div class="col-sm-4 slide has-action-btn" data-id="'. $records['id'] .'" data-type="slide">';
    $result .= '  <div class="thumbnail">';
    $result .= '    <div class="thumbnail-cover">';
    $result .= '      <div class="btn-toolbar" role="toolbar">';
    $result .= '        <div class="btn-group btn-group-sm" role="group">';
    
    if ($i > 0) {
      $result .= '          <button type="button" class="btn btn-default action-trigger" data-action="to-toppest" title="Simpan ke paling depan"><span class="glyphicon glyphicon-step-backward"></span></button>';
      $result .= '          <button type="button" class="btn btn-default action-trigger" data-action="to-topper" title="Bawa ke depan"><span class="glyphicon glyphicon-backward"></span></button>';
    }

    if ($i < ($numrows - 1)) {
      $result .= '          <button type="button" class="btn btn-default action-trigger" data-action="to-downer" title="Bawa ke belakang"><span class="glyphicon glyphicon-forward"></span></button>';
      $result .= '          <button type="button" class="btn btn-default action-trigger" data-action="to-downest" title="Simpan ke paling belakang"><span class="glyphicon glyphicon-step-forward"></span></button>';
    }

    $result .= '        </div>';
    $result .= '        <div class="btn-group btn-group-sm" role="group">';
    $result .= '          <button type="button" class="btn btn-default action-trigger" data-action="delete" title="Hapus"><span class="glyphicon glyphicon-remove"></span></button>';
    $result .= '        </div>';
    $result .= '      </div>';
    $result .= '    </div>';
    $result .= '    <img src="'. $records['image'] .'" alt="'. $records['id'] .'">';
    $result .= '  </div>';
    $result .= '</div>';
  }

  return $result; 
}

function admin_render_navbar_navs() {
  global $_PLP;
  $query = mysqli_query($_PLP['mysql'], 'SELECT * FROM navbar_navs ORDER BY `index` DESC') or die(mysqli_error($_PLP['mysql']));
  $numrows = mysqli_num_rows($query);
  $result = '';

  for ($i = 0; $records = mysqli_fetch_assoc($query); $i++) {

    $toppest = $downest = '';

    $result .= '<tr class="navitem has-action-btn" data-id="'. $records['id'] .'" data-type="nav">';
    $result .= '  <td>';
    $result .= '    <a href="'. $records['link'] .'">'. $records['name'] .'</a>';
    $result .= '  </td>';
    $result .= '  <td class="text-right">';
    
    if ($i == 0) {
      $toppest = 'disabled';
    }

    if ($i == ($numrows - 1)) {
      $downest = 'disabled';
    }

    $result .= '    <button type="button" class="btn btn-link action-trigger" data-action="to-toppest" title="Simpan ke paling depan" '. $toppest .'><span class="glyphicon glyphicon-triangle-top"></span></button>';
    $result .= '    <button type="button" class="btn btn-link action-trigger" data-action="to-topper" title="Bawa ke depan" '. $toppest .'><span class="glyphicon glyphicon-chevron-up"></span></button>';
    $result .= '    <button type="button" class="btn btn-link action-trigger" data-action="to-downer" title="Bawa ke belakang" '. $downest .'><span class="glyphicon glyphicon-chevron-down"></span></button>';
    $result .= '    <button type="button" class="btn btn-link action-trigger" data-action="to-downest" title="Simpan ke paling belakang" '. $downest .'><span class="glyphicon glyphicon-triangle-bottom"></span></button>';
    
    $result .= '   <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modal-add-nav" data-action="edit" title="Ubah"><span class="glyphicon glyphicon-edit"></span></button>';
    $result .= '   <button type="button" class="btn btn-link action-trigger" data-action="delete" title="Hapus"><span class="glyphicon glyphicon-remove"></span></button>';
    $result .= '  </td>';
    $result .= '</td>';
  }

  return $result;
}

function render_about_text($con) {
  $query = mysqli_query($con, 'SELECT * FROM about_texts WHERE is_used = 1') or die(mysqli_error($con));
  $result = mysqli_fetch_assoc($query);
  return $result['content'];
}

function get_setting($con, $field) {
  $query = mysqli_query($con, 'SELECT `'.$field.'` FROM settings ORDER BY id DESC LIMIT 0,1');
  $result = mysqli_fetch_assoc($query);
  return $result[$field];
}

function render_one_shot_alert() {
  $alert = '';

  if (isset($_SESSION['alert'])) {
    $alert .= '<div class="alert alert-'. $_SESSION['alert']['type'] .' alert-dismissible" role="alert">';
    $alert .= ' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    $alert .= $_SESSION['alert']['message'];
    $alert .= '</div>';
  }

  return $alert;
}

function define_base_url() {
  $url = explode('/', $_SERVER['REQUEST_URI']);
  $back_fraction = '../';
  $url_fractions = count($url);
  $base_url = '';

  while ($url_fractions >= URL_FRACTION_LIMIT) {
    $base_url .= $back_fraction;
    $url_fractions--;
  }

  return $base_url;
}

function redirect($to) {
  header('location:'. define_base_url() . $to);
  exit;
}

function escape($con, $string) {
  return mysqli_real_escape_string($con, $string);
}

function unset_one_shots() {
  unset($_SESSION['alert']);
}

function check_privilege($page) {

  switch ($page) {
    
    case 'login':
      
      if (isset($_SESSION['admin'])) {
        redirect('admin/dashboard');
      }

      break;
    
    case 'dashboard': case 'slideshow': case 'parallax': 
    case 'about': case 'navbar': case 'config':

      if (! isset($_SESSION['admin'])) {
        redirect('admin/login');
      }

      break;

  }

}