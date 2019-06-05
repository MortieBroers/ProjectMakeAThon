$(document).ready(function () {
    $('#info').hide();
    $('#closeButton').hide();
});

function openInfo() {
    $('#info').show();
    $('#openButton').hide();
    $('#closeButton').show();
}

function closeInfo() {
    $('#info').hide();
    $('#openButton').show();
    $('#closeButton').hide();
}