$(document).ready(function () {
    $('.page').hide();
    $('.url').hide();
    $('#menu_item_type').on('change', function () {
        var page = $(this).val();
        console.log(page);
        if (page == 'page') {
            $('.page').show();
            $('.url').hide();
        } else if (page == 'url') {
            $('.page').hide();
            $('.url').show();
        } else {
            $('.page').hide();
            $('.url').hide();
        }

    });
});

$('#summernote-textarea1').summernote();

$('#dp1').datepicker({
    format: "yyyy-mm-dd"
});
$('#dp2').datepicker({
    format: "yyyy-mm-dd"
});

$('.ed_btn').on('click', function () {
    if ($(this).hasClass("btn-success")) {
        $(this).removeClass("btn-success")
    }
});

$(document).on('click', '.confirmation', function (e) {
    e.preventDefault();
    var location = $(this).attr('href');
    var message = $(this).attr('message');
    bootbox.confirm(message, function (result) {
        if (result) {
            window.location.replace(location);
        }
    });
});

$('.next').click(function () {
    $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

$('.previous').click(function () {
    $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});

function shorting(on, url) {
    on.sortable({containment: 'parent', opacity: 0.6, update: function (event, ui) {
            var data = $(this).sortable('serialize');
            $.post(url, data, function (data) {});
        }
    });
}

