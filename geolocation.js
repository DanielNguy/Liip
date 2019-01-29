function geoFindMe() {


    if (!navigator.geolocation) {
        // output.innerHTML = "<p>Geolokation wird von ihrem Browser nicht unterstützt</p>";
        return;
    }

    function success(position) {
        console.log("gps", position);
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;

        var data = {latitude: latitude, longitude: longitude};

        fetch('weather.php', {
            method: 'POST',
            body: JSON.stringify(data)
        })
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                console.log(data);
                document.getElementById('Weather').innerHTML = (renderWeather(data));
            });


    };

    function error() {
        // output.innerHTML = "Es war nicht möglich Sie zu lokalisieren";
    };

    // output.innerHTML = "<p>Lokalisieren…</p>";
    navigator.geolocation.getCurrentPosition(success, error);

}
var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric'};
var today  = new Date();

function renderWeather(data) {
    return `<div class="my-auto">
        <h2 class="mb-5">Weather</h2>
        <h3 class="mb-0">${data.name}</h3>
        <div class="report-container">
            <div class="time">
                <div>${(today.toLocaleDateString("de-CH", options))}</div>
                <div>${data.weather[0].description}</div>
            </div>
            <div class="weather-forecast">
                <img
                        src="http://openweathermap.org/img/w/${data.weather[0].icon}.png"
                        class="weather-icon" />
                        <br>
                <span class="max-temperature">Max-Temperature:
                        ${data.main.temp_max}°C</span>
                        <br>
                <span class="min-temperature">Min-Temperature:
                        ${data.main.temp_min}°C</span>
            </div>
            <div class="time">
                <div>Humidity: ${data.main.humidity} %</div>
                <div>Wind: ${data.wind.speed} km/h</div>
            </div>
        </div>`;

}

geoFindMe();