<div id="map" style="height: 500px"></div>
<script type="text/javascript">
        function initMap() {
        var position = {lat: 48.522, lng: 2.201};
        var map = new google.maps.Map(document.getElementById('map'), {
            center: position,
            zoom: 12
        });

        var marker = new google.maps.Marker({
            position: position,
            map: map,
            title: "Aérodrome de paramoteurs d'Etrechy"
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9WPNhptYL2Z8d7LhjGMn2HdV59JlkaHE&signed_in=true&callback=initMap" async defer></script>