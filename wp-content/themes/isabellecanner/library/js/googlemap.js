/**
 * Created by Vasach on 03/06/2016.
 */


function initMap() {
    var myLatlng = new google.maps.LatLng(47.196414, -1.553519);
    var mapOptions = {
        scrollwheel: false,
        zoom: 13,
        center: myLatlng,
        scrollwheel: false
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);


    //MARQUEUR
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(47.196414, -1.553519),
        map: map,
        title: 'Maquis Art '
    });


    //INFOBULLES
    var contentString = '<div id="content">'+
        '<div id="bodyContent">'+
        '<p>4 rue Allaire - 44400 REZE</p>'+

        '</div>'+
        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });

}





