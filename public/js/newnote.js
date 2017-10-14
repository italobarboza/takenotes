$(document).ready(function() {
    $('#share').on('change', function() {
        if ($(this).is(':checked')) {
            $('#url').removeAttr('disabled');
        } else {
            $('#url').attr('disabled', 'disabled');
        }
    });
    $('#share').change();
});