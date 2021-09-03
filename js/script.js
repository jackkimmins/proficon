$(document).ready(function() {

    // As the user types, this event will execute which will refresh the source path of the profile example image.
    $("#txtInput").on("input", function() {
        let type = $('#tryItOut>div>select').find(":selected").text();
        let value = $('#txtInput').val();

        switch(type) {
            case 'initials':
                $('.icon-example').attr('src', './api/' + type + '/' + value + '.svg');
                break;
            default:
                console.log("Unknown")
        }
    });
});