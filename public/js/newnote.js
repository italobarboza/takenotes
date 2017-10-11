$(document).ready(function() {
    $('#inputAvaliableForOthers').on('change', function() {
        if ($(this).is(':checked')) {
            $('#inputNoteURL').removeAttr('disabled');
        } else {
            $('#inputNoteURL').attr('disabled', 'disabled');
        }
    });
});