<?php
/**
 * Test with CDYNE Weather WSDL
 * @date 01/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/cdyne-weather/CdyneWeatherAutoload.php';
/**
 * CDYNE Informations
 */
define('CDYNE_KEY',0);
define('CDYNE_WSDL','http://wsf.cdyne.com/WeatherWS/Weather.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			CdyneWeatherWsdlClass::WSDL_URL=>CDYNE_WSDL);
$c = new CdyneWeatherServiceGet($wsdl);
/**
 * Weather
 */
$c->GetCityForecastByZIP(new CdyneWeatherTypeGetCityForecastByZIP(33320));
print_r($c);
?>