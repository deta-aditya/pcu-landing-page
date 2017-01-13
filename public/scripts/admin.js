$(document).ready(function(){

  /* Enable TinyMCE */
  if (typeof tinymce !== 'undefined') {
    tinymce.init({
      selector: '.tinymce-enabled',
      height: 300
    });
  }

  /* Image Input Eye Candy */
  var fileInput = $('.file-input');

  fileInput.on('click', '.file-input-trigger', function(){
    $(this).siblings('.file-input-hidden').click();
  });

  $('.file-input-hidden').change(function(){
    var input = $(this)[0];
    var preview = $(this).siblings('.file-input-preview');

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        if (preview.data('special') === 'parallax-admin') {
          preview.css('backgroundImage', 'url("'+ e.target.result +'")');
        } else {
          preview.find('img').show().attr('src', e.target.result);
        }
      }

      reader.readAsDataURL(input.files[0]);
    }
  });

  /* Various action buttons controller */
  $('.has-action-btn').on('click', '.action-trigger', function(){
    var id = $(this).parents('.has-action-btn').data('id');
    var action = $(this).data('action').replace('-', '_');
    var type = $(this).parents('.has-action-btn').data('type');
    var form = $('<form>').attr({
      method: 'post',
      action: 'action/'+ type +'_' + action,
    }).append(
      $('<input>').attr({
        type: 'hidden',
        name: 'id',
        value: id,
      })
    ).css('display', 'none');

    $('body').append(form);
    form.submit();
  });

  /* Edit navigation links controllers */
  $('#modal-add-nav').on('show.bs.modal', function(e){
    var btn = $(e.relatedTarget);
    var action = btn.data('action');

    if (action === 'edit') {
      var tr = btn.parents('.navitem');
      var name = tr.find('a').text();
      var link = tr.find('a').attr('href');
      var arrLink = [];

      arrLink = link.split('://');
      link = arrLink[arrLink.length - 1];

      $(this).append($('<input>').attr({
        type: 'hidden',
        name: 'id',
        value: tr.data('id')
      }));
      $(this).attr('action', 'action/nav_edit');
      $(this).find('.modal-title').text('Ubah Link');
      $(this).find('input#name').val(name);
      $(this).find('input#link').val(link);
      $(this).find('#put-on-form-group').hide();
    }
  });

  $('#modal-add-nav').on('hidden.bs.modal', function(){
    $(this).find('input[type="hidden"]').remove();
    $(this).attr('action', 'action/nav_add');
    $(this).find('.modal-title').text('Tambah Link');
    $(this).find('input#name').val('');
    $(this).find('input#link').val('');
    $(this).find('#put-on-form-group').show();
  });

});