$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});
// $('.selectize-group').selectize({
//     sortField: 'text'
// });

$(document).ready(function(){
    $('.confirmation').confirm({
        type: 'dark',
        typeAnimated: true,
        title: 'Confirmation Alert',
        content: 'Are You Sure...?',
        confirmButtonClass: 'btn-info',
        cancelButtonClass: 'btn-danger',
        confirmButton: 'Yes',
        cancelButton: 'NO',
        animation: 'zoom',
        closeAnimation: 'scale',
        confirm: function(){
            alert('Confirmed!');
        },
        cancel: function(){
            alert('Canceled!')
        }
    });
});
