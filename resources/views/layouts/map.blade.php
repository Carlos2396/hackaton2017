<div>

    <div id="map" class="col-sm-12" style="height: 500px"></div>
    <script type="text/javascript">
        var lats = {{json_encode($lats)}};
        var lngs = {{json_encode($lngs)}};
        var types = {{json_encode($types)}};
        
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 19.020638, lng: -98.243254},
                zoom: 15
            });

            var i;
            //var markers;
            for(i=0; i < types.length; i++){
                coords = new google.maps.LatLng(lats[i], lngs[i]);
                var marker = new google.maps.Marker({
                    position : coords,
                    map : map,
                    zIndex: i+1
                });
            }
        }

    </script>


</div>