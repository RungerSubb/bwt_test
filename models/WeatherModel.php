<?php
/**
 * Weather parser model
 */
require_once '../vendor/autoload.php';
use GuzzleHttp\Client as Client;


/**
 * build basic url for request
 *
 * @param $baseURI
 * @param $method
 * @param $params
 *
 * @return string result url
 */
function buildBaseString($baseURI, $method, $params) {
    $r = array();
    ksort($params);
    foreach($params as $key => $value) {
        $r[] = "$key=" . rawurlencode($value);
    }
    return $method . "&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
}

/**
 * build header part for request
 *
 * @param $baseURI
 * @param $method
 * @param $params
 *
 * @return string
 */
function buildAuthorizationHeader($oauth) {
    $r = 'Authorization: OAuth ';
    $values = array();
    foreach($oauth as $key=>$value) {
        $values[] = "$key=\"" . rawurlencode($value) . "\"";
    }
    $r .= implode(', ', $values);
    return $r;
}


/**
 * main request function
 *
 * @return request result
 */
function getWeather(){
    $url = 'https://weather-ydn-yql.media.yahoo.com/forecastrss';
    $app_id = '4KOfPH4k';
    $consumer_key = 'dj0yJmk9VGprWXhlN0lDRmlNJnM9Y29uc3VtZXJzZWNyZXQmc3Y9MCZ4PTYx';
    $consumer_secret = 'fbf8d9c1e666421d3ef8c00c80421798768a66f2';

    $query = array(
        'location' => 'zaporizhzhya,ua',
        'format' => 'json',
    );
    $oauth = array(
        'oauth_consumer_key' => $consumer_key,
        'oauth_nonce' => uniqid(mt_rand(1, 1000)),
        'oauth_signature_method' => 'HMAC-SHA1',
        'oauth_timestamp' => time(),
    );
    $base_info = buildBaseString($url, 'GET', array_merge($query, $oauth));
    $composite_key = rawurlencode($consumer_secret) . '&';
    $oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
    $oauth['oauth_signature'] = $oauth_signature;
    $header = array(
        buildAuthorizationHeader($oauth),
        'X-Yahoo-App-Id: ' . $app_id
    );
    $options = array(
        CURLOPT_HTTPHEADER => $header,
        CURLOPT_HEADER => false,
        CURLOPT_URL => $url . '?' . http_build_query($query),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false
    );

    $ch = curl_init();
    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response);
}




