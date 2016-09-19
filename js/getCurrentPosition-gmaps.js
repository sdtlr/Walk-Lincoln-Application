/**
 * Created by Sam Taylor on 21/03/2016.
 */

if (window.jQuery) {
    console.log("Jquery has loaded successfully...")
} else {
    console.log("Jquery has NOT loaded...")
}

$(document).ready(function() {
    navigator.geolocation.getCurrentPosition(callback);
});

function getCurrentPosition() {
    navigator.geolocation.getCurrentPosition(callback);
}

function callback(position) {
    var mypos = position.coords.latitude + "," + position.coords.longitude;
    $('#myloc').attr('value', mypos);
    console.log(mypos);
}


