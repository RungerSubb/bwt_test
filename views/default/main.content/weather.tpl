<link rel="stylesheet" href="{$templateWebPath}css/weather.css" type="text/css">
<div class="weather-main">
    <br/>
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="weather-image">
                <img class="weather-icon" src="{$templateWebPath}css/img/weather.icons/{$weatherImage}"><br/>
            </div>
            <div class="weather-text">{$temperature}°C</div>
        </div>
        <div class="form-group col-md-7">
            <div class="location city">
                {$city},
            </div>
            <div class="location country">
                {$country}
            </div>
        </div>
        <div class="form-group col-md-1">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
        </div>
        <div class="form-group col-md-3">
           <div class="weather-image sun">
                <img class="weather-icon mini" src="{$templateWebPath}css/img/weather.icons/humidity.png">
            </div>

            <div class="weather-text-mini">Humidity</div>
            <div class="weather-text-mini">{$humidity}%</div>
        </div>
        <div class="form-group col-md-3">
            <div class="weather-image sun">
                <img class="weather-icon mini" src="{$templateWebPath}css/img/weather.icons/sunrise.png">
            </div>
            <div class="weather-text-mini">Sunrise</div>
            <div class="weather-text-mini">{$sunrise}</div>
        </div>
        <div class="form-group col-md-3">
            <div class="weather-image sun">
                <img class="weather-icon mini" src="{$templateWebPath}css/img/weather.icons/sunset.png">
            </div>
            <div class="weather-text-mini">Sunset</div>
            <div class="weather-text-mini">{$sunset}</div>
        </div>
    </div>

</div>