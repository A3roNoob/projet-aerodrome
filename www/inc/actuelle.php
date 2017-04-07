<div class="alert alert-dismissible alert-danger dataError" style="display: none;">
    <button type="button" class="close">&times;</button>
    Impossibe d'actualiser la météo
</div>

<a href="#" class="btn btn-primary btn-xs reloadData">Actualiser la météo</a>

<div class="date">
    <p>Dernière mise à jour: <span id="received-date"></span></p>
</div>

<div class="temperature">
    <p><span id="received-temp">-- </span>°C</p>
</div>

<!--
<div class="humidite">
    <p><span id="received-humidity">--</span>%</p>
</div>

<div class="vitesse">
    <p><span id="received-speed">--</span>km/h</p>
</div>
-->


<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.min.js"></script>
<!--<script src="./js/dataReceive.js"></script>-->
<script>
    function getAjax() {
        $.ajax({
            type: 'GET',
            url: './inc/receive_data.php',
            dataType: 'json'
            })
            .done(function(response){
                var dateJson = response['date'];
                var tempJson = response['temp'];
                $('#received-temp').html(tempJson);
                $('#received-date').html(dateJson);
            })
            .fail(function(){
                $('.dataError').show();
            })
            .always(function(response){
                $(".reloadData").text("Actualiser la météo");

                var dateNowJs = moment().format("YYYY-MM-DD HH:mm:ss");
                var dateParseJs = moment(response['date']).format("YYYY-MM-DD HH:mm:ss");
                var diffDateJs = moment(dateNowJs).diff(moment(dateParseJs));
                diffDateJs = moment(diffDateJs).format("ss");
                console.log(diffDateJs);

                if (diffDateJs > 35 || response[''] === 'false') {
                    $('.dataError').show();
                } else{
                    $('.dataError').hide();
                }
            });

    }

    getAjax();
    setInterval(getAjax, 10000); // 5min

    $(".reloadData").on("click", function(e){       // force l'actualisation
        e.preventDefault();
        getAjax();
        $(".reloadData").text("Chargement");
    });

    $('.alert .close').on('click', function(e) {    // bouton close du popup alert
        $(this).parent().hide();
    });
</script>