/**
 * Created by dell on 9/3/2016.
 */

$(document).ready(function () {

    var purpose = $("[name=purpose]:checked").val();

    var storage = $("[name=storage]:checked").val();

    var marine_value = $("[name=marine]:checked").val();

    var git_value = $("[name=marine]:checked").val();

    if (marine_value == 0) {
        $("#marine_value").toggleClass().slideToggle();
    }
    if (storage == 'on') {
        $("#storage_view").toggleClass().slideToggle();
    }

    if (git_value == 0) {
        $("#git_value").toggleClass().slideToggle();
    }
    $("#storage_view").toggleClass().slideToggle();

    $(document.body).on('change', '#storage', function (e) {
        //alert('ds');
    });


    $('#storage').on('ifToggled', function (event) {
        $("#storage_view").toggleClass().slideToggle();
    });

    $('[name=marine]').on('ifChecked', function (event) {
        $("#marine_value").toggleClass().slideToggle();

    });

    $('[name=git]').on('ifChecked', function (event) {
        $("#git_value").toggleClass().slideToggle();

    });

    $(".p23").each(function () {
        $(this).toggleClass("p23").parents(".widget:first").find(".widget-content").slideToggle();
    });


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


    $(document.body).on('change', '.country_id', function (e) {

        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        var country_id = $(this).val();
        var par = $(this).parent().parent().parent().find("#region");
        //var attr = $(this).parent().parent().parent().find(".region_id").attr('name');
        //var attr = $(this).parent().parent().parent().parent().find(".region_id").attr('name');
        var attr = $(this).parent().parent().parent().find("#region").attr('data-code');
        //alert(attr6);
        //  console.log(attr6);
        //console.log(country_id);
        //console.log(par);
        //console.log(attr);

        $.ajax({

            type: "GET",
            //url: "{{route('get_region')}}",
            url: "get_region/" + country_id,

            success: function (data) {
                var output = "<option value selected='selected'>Select-One</option>";

                for (var i in data) {
                    output += "<option value='" + data[i].id + "'>" + data[i].name + "</option>";
                }

                $(par).html("<select name='" + attr + "' class='form-control selectpicker' id='region_id'><optgroup label='All States'>" + output + "</optgroup></select>");
                //$("#region").html("<select name='region_id' class='form-control selectpicker' id='region_id'><optgroup label='All States'>" + output + "</optgroup></select>");

            },
            error: function (data) {

                console.log('Error:', data);
            }
        });

    });

    $(document.body).on('change', '#region_id', function () {
        var region_id = $(this).val();
        var par = $(this).parent().parent().parent().parent().find("#city");
        var attr = $(this).parent().parent().parent().parent().parent().find(".city_id").attr('name');
        console.log(attr);
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

                $(par).html("<select name='" + attr + "' class='form-control selectpicker' id='city_id'><optgroup label='All Cities'>" + output + "</optgroup></select>");
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

    });


    $(document.body).on('change', '.vehicle_make', function () {
        var get_vehicle = $(this).val();
        var par = $(this).parent().parent().parent().find("#model");

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
                var output = "<option value selected='selected'>Select-One</option>";
                for (var i in data) {
                    output += "<option value='" + data[i].id + "'>" + data[i].name + "</option>";
                }
                $(par).html("<select name='vehicle_model' class='form-control selectpicker vehicle_model' id='vehicle_model'><optgroup label='All Models'>" + output + "</optgroup></select>");
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

    });


    $(document.body).on('click', '#remove_id', function () {
        var par = $(this).parent().parent().parent().remove();
    });
    $(document.body).on('change', '#shipper_id', function (e) {
        var shipper_id = $('#shipper_id').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        $.ajax({

            type: "GET",
            url: "get_shipper_persons/" + shipper_id,

            success: function (data) {
                console.log(data);
                var output = "<option value selected='selected'>Select-One</option>";
                for (var i in data) {
                    output += "<option value='" + data[i].id + "'>" + data[i].first_name + " " + data[i].last_name + "</option>";
                }
                $("#shipper_personnels").html("<select name='shipper_line_id' class='form-control selectpicker vehicle_model' id='vehicle_model'><optgroup label='All Shipper Personnels'>" + output + "</optgroup></select>");
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