const validTypes = ['initials', 'identicon'];

//This function is for throttling the number of requests made as the user types in a seed.
function throttle(time, func) {
    if (!time || typeof time !== "number" || time < 0) {
        return func;
    }

    var throttleTimer = 0;

    return function () {
        var args = arguments;
        clearTimeout(throttleTimer);
        throttleTimer = setTimeout(function () {
            func.apply(null, args);
        }, time);
    }
}

function throttleInterval(time, func) {
    if (!time || typeof time !== "number" || time < 0) {
        return func;
    }

    var throttleTimer = null;
    var lastState = null;
    var eventCounter = 0;
    var args = [];

    return function () {
        args = arguments;
        eventCounter++;
        if (!throttleTimer) {
            throttleTimer = setInterval(function () {
                if (eventCounter == lastState) {
                    clearInterval(throttleTimer);
                    throttleTimer = null;
                    return;
                }

                lastState = eventCounter;
                func.apply(null, args);
            }, time);
        }
    }
}

//Updates the example image with the correct profile image type and new seed.
function reloadExampleImage() {
    let type = $('#txtType').find(":selected").val();
    let value = $('#txtInput').val();

    if (validTypes.includes(type)) {
        $('.icon-example').attr('src', './api/' + type + '/' + value + '.svg');
    } else {
        console.log("Unknown");
    }
}

$(document).ready(function () {
    //As the user types, update the example image.
    $("#txtInput").on("input", throttle(50, function (evt) {
        reloadExampleImage();
    }));

    //Runs when the user changes the profile icon type.
    $("#txtType").change(function () {

        //Displays a default image when the user has not specified a custom seed.
        if ($('#txtInput').val() == "")
            $('.icon-example').attr('src', './api/' + $(this).find(":selected").val() + '/' + exampleSeed + '.svg');
        else
            reloadExampleImage();
    });
});