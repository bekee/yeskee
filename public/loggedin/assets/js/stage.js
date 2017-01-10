/**
 * Created by dell on 9/3/2016.
 */

$(document).ready(function () {

    $(document.body).on('change', '#imagep', function (e) {
        readURL(this);
    });


});


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image').attr('src', e.target.result);
            $('#image').attr('width', '100%');
            $('#image').attr('height', '100%');
        }

        reader.readAsDataURL(input.files[0]);
    }
}