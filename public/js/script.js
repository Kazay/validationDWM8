$(document).ready(function() {

    $('#display-addform').on('click', function() {
        $('.add__form').removeClass('hidden');
        $('#display-addform').addClass('hidden');
        $('#hide-addform').removeClass('hidden');
    }); 

    $('#hide-addform').on('click', function() {
        $('.add__form').addClass('hidden');
        $('#hide-addform').addClass('hidden');
        $('#display-addform').removeClass('hidden');
    });
    
});