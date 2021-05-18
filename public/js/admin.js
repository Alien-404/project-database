// modal block
$(function() {

    $('.blockUser').on('click', function() {

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/jatimlelungon/public/admin/getBlock',
            data: {id : id},
            method: 'post',
            dataType: 'JSON',
            success: function(data) {
                $('#name').val(data.nama_user);
                $('#email').val(data.email_user);
                $('#id').val(data.id_user);
            }
        });

    });

    $('.activeUser').on('click', function() {

        const id = $(this).data('active');
        
        $.ajax({
            url: 'http://localhost/jatimlelungon/public/admin/getActive',
            data: {id : id},
            method: 'post',
            dataType: 'JSON',
            success: function(data) {
                $('#name_active').val(data.nama_user);
                $('#email_active').val(data.email_user);
                $('#id_active').val(data.id_user);
            }
        });

    });

    $('.editKat').on('click', function() {

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/jatimlelungon/public/admin/getEditKat',
            data: {id : id},
            method: 'post',
            dataType: 'JSON',
            success: function(data) {
                $('#old_kat').val(data.nama_kategori);
                $('#id_kat').val(data.id_kategori);
            }
        });

    });

});

$(function() {

  var // Define maximum number of files.
      max_file_number = 3,
      // Define your upload field class or id or tag.
      $file_upload = $('#image'), 
      // Define your submit class or id or tag.
      $button = $('#publish'); 

  // Disable submit button on page ready.
  $button.prop('disabled', 'disabled');

  $file_upload.on('change', function () {
    var number_of_images = $(this)[0].files.length;
    if (number_of_images > max_file_number) {
      alert(`You can upload maximum ${max_file_number} files.`);
      $(this).val('');
      $button.prop('disabled', 'disabled');
    } else {
      $button.prop('disabled', false);
    }
  });
});

//preview image upload
$(function() {
  var imagesPreview = function(input, placeToInsertImagePreview) {
    if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();
            reader.onload = function(event) {
                $($.parseHTML('<img>')).attr('src', event.target.result).attr('class', 'img-fluid').appendTo(placeToInsertImagePreview);
            }
            reader.readAsDataURL(input.files[i]);
        }
    }
};

$('#image').on('change', function() {
    imagesPreview(this, 'div.gallery');
});
});


// modal delete
$(function() {

  $('.deletePost').on('click', function() {
      const id = $(this).data('post');
      $.ajax({
        url: 'http://localhost/jatimlelungon/public/admin/getDelete',
        data: {id : id},
        method: 'post',
        dataType: 'JSON',
        success: function(data) {
          const tgl = data.created_at;
          $('#title').val(data.judul);
          $('#kat').val(data.nama_kategori);
          $('#created').val(tgl.split(" ", 1));
          $('#uploadBy').val(data.nama_user);
          $('#id').val(data.id_publish);
        
        }
    });

  });

});

$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

var loadFile = function(event) {
  var output = document.getElementById('output');
  output.src = URL.createObjectURL(event.target.files[0]);
  output.onload = function() {
    URL.revokeObjectURL(output.src) // free memory
  }
};

var loadFile2 = function(event) {
  var output = document.getElementById('output2');
  output.src = URL.createObjectURL(event.target.files[0]);
  output.onload = function() {
    URL.revokeObjectURL(output.src) // free memory
  }
};

var loadFile3 = function(event) {
  var output = document.getElementById('output3');
  output.src = URL.createObjectURL(event.target.files[0]);
  output.onload = function() {
    URL.revokeObjectURL(output.src) // free memory
  }
};

// live search ajax
$(document).ready(function(){
  load_data();
  function load_data(kategori, keyword, page)
  {
    $.ajax({
      method:'post',
      url:'http://localhost/jatimlelungon/public/admin/search',
      data: {kategori: kategori, keyword: keyword, page: page},
      success:function(result)
      {
        $('.content').html(result);
      }
    });
   }
  $('#s_keyword').keyup(function(){
    var kategori = $("#s_kategori").val();
    var keyword = $("#s_keyword").val();
    load_data(kategori, keyword, 1);
  });
  $('#s_kategori').change(function(){
    var kategori = $("#s_kategori").val();
    var keyword = $("#s_keyword").val();
    load_data(kategori, keyword, 1);
  });
  $(document).on('click', '#page', function(){
    var page_number = $(this).data('page');
    var kategori = $("#s_kategori").val();
    var keyword = $("#s_keyword").val();
    load_data(kategori, keyword, page_number);
  });


});

