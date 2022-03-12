$(document).on('click', 'td.edit', function () {
    var arr = $(this).attr('class').split(' ');
    $('.ajax').html($('.ajax input').val());
    $('.ajax').removeClass('ajax');
    $(this).addClass('ajax');
    $(this).html('<input class="form-control ' + arr[1] + ' ' + arr[2] + '" id="editbox" value="' + $(this).text() + '" type="text">');
    $('#editbox').focus();
    $(document).on('blur', '#editbox', function () {
        var arr = $(this).attr('class').split(' ');
        var table = $('table').attr('id');
        $.ajax({
            type: 'POST',
            url: 'http://localhost/Shop/edit/ajax/',
            data: 'value=' + $('.ajax input').val() + '&id=' + arr[2] + '&field=' + arr[1] + '&table=' + table,
            success: function (data) {
            $('.ajax').html($('.ajax input').val());
            $('.ajax').removeClass('ajax');
            }
        });
    });
});
