$('a[href^="#"]').on('click', function () {
    
    var scrollAmount = $(this.hash).offset().top;

    $('html,body').animate({ scrollTop: scrollAmount }, 'slow');
});
$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
