//define variable 
var map="";	
var markers = [];

//initialize map 
function initialize() {
    var mapOptions = {
        center: { lat: 18.520430, lng: 73.856744},
        zoom: 10,
        tilt: 30,
        panControl: false,
        mapTypeControl: false,
        scrollwheel: false,
        scaleControl: false,
        streetViewControl: false,
        overviewMapControl: false,
        zoomControl: true,
        zoomControlOptions: {
            position: google.maps.ControlPosition.LEFT_CENTER
        }
};
map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);
var trafficLayer = new google.maps.TrafficLayer();
trafficLayer.setMap(map);			
}
initialize();
//set marker on map
function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
    }
}
//fetching data from database on page load
$(document).ready(function(){
    var url = 'location';        
    $.ajax({
        url: url,                       
        type:'get',
        dataType:'json',
        success:function(data){
            //if success is ture than set marker on map  
            if(data.success == true){                     
                var i;
                for(i=0; i <(data.data).length; i++){                                        
                    var lat = data.data[i].location_lat;
                    var lng = data.data[i].location_lon;
                    var myLatLng =new google.maps.LatLng(parseFloat(lat),parseFloat(lng));						
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        animation: google.maps.Animation.DROP,
                        title: data.data[i].location_address,
                    });
                    markers.push(marker);                    
                }                   
            }
        },
        error: function ( jqXHR,textStatus,errorThrown ){
            console.log("error");                        
        }
    });
});