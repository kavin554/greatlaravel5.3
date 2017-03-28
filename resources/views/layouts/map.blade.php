<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 24px;
    }

    .switch input {
        display: none;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>
<style>
    #map {
        width: 100%;
        height: 330px;
    }
</style>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfnOQEYE3qSj4iKNMqiqJdg_slnltHWlE&callback=initMap"></script>

<script>
    $(document).ready(function () {


        function change_data() {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("rdata").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "route_data.php", true);
            xmlhttp.send();
        }


        function initialize() {
            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: new google.maps.LatLng(27.707, 85.297),
                zoom: 8,
            }
            //intializing google maps
            var map = new google.maps.Map(mapCanvas, mapOptions)

            //listener for the click event
            google.maps.event.addListener(map, "click", function (event) {
                var lat = event.latLng.lat();
                var lng = event.latLng.lng();

                radius = new google.maps.Circle({
                    map: map,
                    radius: 10,
                    center: event.latLng,
                    fillColor: '#777',
                    fillOpacity: 0.1,
                    strokeColor: '#AA0000',
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    draggable: false,
                    editable: true
                });

                map.panTo(new google.maps.LatLng(lat, lng));

                document.getElementById("latitude").value = lat;
                document.getElementById("longitude").value = lng;

                var myPath = "map_submit.php?lt=" + lat + "&ln=" + lng;
                var xhReq = new XMLHttpRequest();
                xhReq.open("POST", myPath, false);
                xhReq.send(null);
                var serverResponse = xhReq.responseText;
                //alert(serverResponse);

                change_data();

            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    });
</script>