$('select').change(function () {
    var value = $(this).find(':selected') [0].value;
    var id = $(this).attr('id');
    $.ajax({
    type: 'POST',
    url: 'http://localhost/backend+frontend/edit/ajax/',
    data: 'value=' + value + '&id=' + id + '&field=categories&table=shop',
    success: function (data) {
        $('.ajax').html($('.ajax select :selected').val());
        $('.ajax').removeClass('ajax');
    }
    });
})
