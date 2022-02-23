$(document).ready(function() {
    $('input[name=avatar]').on('change', function(e_) {
        var reader = new FileReader();
        reader.onload = function(e_) {
            $('#preview')
                .attr('src', e_.target.result)
                .css('display', 'inline-block');
            $('#avatar_pic').css('display', 'none');
        };
        reader.readAsDataURL(e_.target.files[0]);
    });
});