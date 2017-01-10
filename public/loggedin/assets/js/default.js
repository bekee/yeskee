/**
 * Created by dell on 9/3/2016.
 */

$(document).ready(function () {
    var consignee = $('#consignee_type').val();

    if (consignee == 'individual') {
        $('.diplomatC').addClass('fade out hide');
        $('.diplomatC').removeClass('show');
        $('.companyC').addClass('fade out hide');
        $('.companyC').removeClass('show');
        $('.individualC').removeClass('fade out hide');
        $('.individualC').addClass('fade in show');
    }
    else if (consignee == 'company') {
        $('.diplomatC').addClass('fade out hide');
        $('.diplomatC').removeClass('show');
        $('.individualC').addClass('fade out hide');
        $('.individualC').removeClass('show');
        $('.companyC').removeClass('fade out hide');
        $('.companyC').addClass('fade in show');
    } else {
        $('.individualC').addClass('fade out hide');
        $('.individualC').removeClass('show');
        $('.companyC').addClass('fade out hide');
        $('.companyC').removeClass('show');
        $('.diplomatC').removeClass('fade out hide');
        $('.diplomatC').addClass('fade in show');
    }


    $(document.body).on('change', '#consignee_type', function (e) {
        var consignee = $('#consignee_type').val();

        if (consignee == 'individual') {
            $('.diplomatC').addClass('fade out hide');
            $('.diplomatC').removeClass('show');
            $('.companyC').addClass('fade out hide');
            $('.companyC').removeClass('show');
            $('.individualC').removeClass('fade out hide');
            $('.individualC').addClass('fade in show');
        }
        else if (consignee == 'company') {
            $('.diplomatC').addClass('fade out hide');
            $('.diplomatC').removeClass('show');
            $('.individualC').addClass('fade out hide');
            $('.individualC').removeClass('show');
            $('.companyC').removeClass('fade out hide');
            $('.companyC').addClass('fade in show');
        } else {
            $('.individualC').addClass('fade out hide');
            $('.individualC').removeClass('show');
            $('.companyC').addClass('fade out hide');
            $('.companyC').removeClass('show');
            $('.diplomatC').removeClass('fade out hide');
            $('.diplomatC').addClass('fade in show');
        }


    });


    var partner = $('#partner').val();
    if (partner == 'individual') {
        $('.company').addClass('fade out hide');
        $('.company').removeClass('show');
        $('.individual').removeClass('fade out hide');
        $('.individual').addClass('fade in show');
    } else {
        $('.individual').addClass('fade out hide');
        $('.individual').removeClass('show');
        $('.company').removeClass('fade out hide');
        $('.company').addClass('fade in show');
    }


    $(document.body).on('change', '#partner', function (e) {
        var partner = $('#partner').val();
        if (partner == 'individual') {
            $('.company').addClass('fade out hide');
            $('.company').removeClass('show');
            $('.individual').removeClass('fade out hide');
            $('.individual').addClass('fade in show');
        } else {
            $('.individual').addClass('fade out hide');
            $('.individual').removeClass('show');
            $('.company').removeClass('fade out hide');
            $('.company').addClass('fade in show');
        }
    });
    $(document.body).on('change', '#imagep', function (e) {
        readURL(this);
    });
    $(document.body).on('change', '#imagep2', function (e) {
        readURL2(this);
    });


    $(document.body).on('change', '#country_id', function (e) {

        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        var country_id = $('#country_id').val();

        $.ajax({

            type: "GET",
            //url: "{{route('get_region')}}",
            url: "get_region/" + country_id,

            success: function (data) {
                var output = "<option value selected='selected'>Select-One</option>";

                for (var i in data) {
                    output += "<option value='" + data[i].id + "'>" + data[i].name + "</option>";
                }


                $("#region").html("<select name='region_id' class='form-control selectpicker' id='region_id'><optgroup label='All States'>" + output + "</optgroup></select>");

            },
            error: function (data) {

                console.log('Error:', data);
            }
        });

    });

    $(document.body).on('change', '#region_id', function () {
        var region_id = $('#region_id').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        $.ajax({

            type: "GET",
            //url: "{{route('get_region')}}",
            url: "get_cities/" + region_id,

            success: function (data) {

                var output = "<option value selected='selected'>Select-One</option>";

                for (var i in data) {
                    output += "<option value='" + data[i].id + "'>" + data[i].name + "</option>";
                }

                $("#city").html("<select name='city_id' class='form-control selectpicker' id='city_id'><optgroup label='All Cities'>" + output + "</optgroup></select>");
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

    });


    $(document.body).on('change', '.vehicle_make', function () {
        var get_vehicle = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        $.ajax({

            type: "GET",
            //url: "{{route('get_region')}}",
            url: "get_vehicle/" + get_vehicle,

            success: function (data) {
                alert(data);
                var output = "<option value selected='selected'>Select-One</option>";

                for (var i in data) {
                    output += "<option value='" + data[i].id + "'>" + data[i].name + "</option>";
                }

                $("#city").html("<select name='vehicle_model' class='form-control selectpicker vehicle_model' id='vehicle_model'><optgroup label='All Cities'>" + output + "</optgroup></select>");
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

    });


});


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image').attr('src', e.target.result);
            $('#image').attr('width', 100);
            $('#image').attr('height', 100);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image2').attr('src', e.target.result);
            $('#image2').attr('width', 100);
            $('#image2').attr('height', 200);
        }

        reader.readAsDataURL(input.files[0]);
    }
}