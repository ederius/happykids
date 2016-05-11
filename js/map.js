

$(document).on("ready", function () {
    inicializar_mapa()
})

function inicializar_mapa() {
    var mapOptions = {
        center: new google.maps.LatLng(11.5356389,-72.9004071),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("mapa_div"),
        mapOptions);

    var pos = new google.maps.LatLng(11.5346543, -72.9220915);
    var marker = new google.maps.Marker({
        position: pos,
        map: map,
        title:"Sede principal (Calle 21 #21 - 05)",
        animation: google.maps.Animation.BOUNCE
    });


    var pos1 = new google.maps.LatLng(11.5423624, -72.9057096);
    var marker1 = new google.maps.Marker({
        position: pos1,
        map: map,
        title:"segunda sede (Carrera 7 N° 16 - 39)",
        animation: google.maps.Animation.BOUNCE
    });

}

