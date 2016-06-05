/**
 * Created by Vasach on 03/06/2016.
 */


function initMap() {
    var myLatlng = new google.maps.LatLng(47.497030, 1.254629);
    var mapOptions = {
        zoom: 13,
        center: myLatlng
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);


    //MARQUEUR
    var hotel = new google.maps.MarkerImage('img/marker.png');
    var marker1 = new google.maps.Marker({
        position: new google.maps.LatLng(47.497030, 1.254629),
        icon:hotel,
        map: map,
        title: 'Maquis Art '
    });


    //INFOBULLES

}


google.maps.event.addDomListener(window, 'load', initMap);


