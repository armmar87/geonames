$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



});

function initAutocomplete(countries) {
    $('#getTwentyCities').autocomplete({
        lookup: countries,
        onSelect: function (suggestion) {
            alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
            let data = {lat_lng: suggestion.data};
            getTwentyCities(data);
        }
    });

}

function getTwentyCities(data) {
    let url = LARAVEL.APP_URL + '/get-twenty-cities';
    $.post( url, data, function( response ) {

    });
}


function initMap() {

    var myLatLng = {lat: 40.179, lng: 44.512};

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
    });

}
