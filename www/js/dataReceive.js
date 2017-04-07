function getAjax() {
    $.ajax({
        type: 'GET',
        url:'./inc/receive_data.php',
        dataType: 'json',
        success: function(response) {
            var dateJson = response['date'];
            var tempJson = response['temp'];
            //var humJson = response['humidity'];
            //var speedJson = response['windspeed'];
            $('#received-date').html(dateJson);
            $('#received-temp').html(tempJson);
            //$('#received-humidity').html(humJson);
            //$('#received-humidity').html(speedJson);
        }
    });
}

getAjax();
setInterval(getAjax, 5000); // 5min