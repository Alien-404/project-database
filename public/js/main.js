$(function() {

    $('.editBtn').on('click', function() {

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/jatimlelungon/public/home/getDetails',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data[0].id_review);
                $('#name').val(data[0].nama_user);
                $('#text').val(data[0].review);
            }
        });

    });

    $('.deleteBtn').on('click', function() {

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/jatimlelungon/public/home/getDetails',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#D_id').val(data[0].id_review);
                $('#D_name').val(data[0].nama_user);
                $('#D_text').val(data[0].review);
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

let password = document.getElementById("pass")
let confirm_password = document.getElementById("re_pass");

function validatePassword(){
    if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
    confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


