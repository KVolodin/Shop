$(document).ready(function () {
    $('button[data-del]').click(function () {
    var id = $(this).data('del');
    answer = confirm('Вы действительно хотите удалить запись с ID ' + id + ' ?')
    if (answer) {
        location.href = 'http://localhost/Shop/edit/delete/' + id;
    }
    });
});
