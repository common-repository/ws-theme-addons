// Docs at http://simpleweatherjs.com
jQuery(document).ready(function($) {
    /* Does your browser support geolocation? */
    if ("geolocation" in navigator) {
        $('.js-geolocation').show();
    } else {
        $('.js-geolocation').hide();
    }

    /* Where in the world are you? */
    $('.js-geolocation').on('click', function() {
        navigator.geolocation.getCurrentPosition(function(position) {
            loadWeather(position.coords.latitude + ',' + position.coords.longitude); //load weather using your lat/lng coordinates
        });
    });

    /* 
     * Test Locations
     * Austin lat/long: 30.2676,-97.74298
     * Austin WOEID: 2357536
     */
    $(document).ready(function() {
        loadWeather('Kathmandu', ''); //@params location, woeid
    });

    function loadWeather(location, woeid) {
        $.simpleWeather({
            location: location,
            woeid: woeid,
            unit: 'c',
            success: function(weather) {

                console.log(weather);

                html = '<h2><i class="icon-' + weather.code + '"></i> ' + weather.temp + '&deg;' + weather.units.temp + '</h2>';
                html += '<ul><li>' + weather.city + ', ' + weather.region + '</li>';
                html += '<li class="currently">' + weather.currently + '</li>';
                html += '<li>' + weather.alt.temp + '&deg;' + weather.alt.unit + '</li></ul>';

                $("#weather").html(html);
            },
            error: function(error) {
                $("#weather").html('<p>' + error + '</p>');
            }
        });
    }

});