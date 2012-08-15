<?php
/**
 * Test with RestFul WSDL
 * @date 15/08/2012
 */
ini_set('display_errors',E_ALL);
$services = array(
				'http://www.restfulwebservices.net/wcf/AirportService.svc?wsdl',
				'http://www.restfulwebservices.net/wcf/BibleASVService.svc?wsdl',
				'http://www.restfulwebservices.net/wcf/EmailValidationService.svc?wsdl',
				'http://www.restfulwebservices.net/wcf/StockQuoteService.svc?wsdl',
				'http://www.restfulwebservices.net/wcf/GeoIPService.svc?wsdl',
				'http://www.restfulwebservices.net/wcf/HCPCSService.svc?wsdl',
				'http://www.restfulwebservices.net/wcf/AustraliaPostalCodeService.svc?wsdl',
				'http://www.restfulwebservices.net/wcf/UNSPSCService.svc?wsdl',
				'http://www.restfulwebservices.net/wcf/USAZipCodeService.svc?wsdl',
				'http://www.restfulwebservices.net/wcf/WeatherForecastService.svc?wsdl');
foreach($services as $serviceUrl)
{
	$pathinfo = pathinfo($serviceUrl);
	$serviceName = str_replace('Service.svc?wsdl','',$pathinfo['basename']);
	require_once dirname(__FILE__) . '/restful-' . strtolower($serviceName) . '/RF' . $serviceName . 'Autoload.php';
}
/**
 * RestFul Informations
 */
define('RESTFUL_AIRPORT_WSDL','http://www.restfulwebservices.net/wcf/AirportService.svc?wsdl');
define('RESTFUL_GEOIP_WSDL','http://www.restfulwebservices.net/wcf/GeoIPService.svc?wsdl');
define('RESTFUL_WEATHER_WSDL','http://www.restfulwebservices.net/wcf/WeatherForecastService.svc?wsdl');
define('RESTFUL_EMAIL_WSDL','http://www.restfulwebservices.net/wcf/EmailValidationService.svc?wsdl');
/**
 * Airport
 */
$wsdl = array(
			RFAirportWsdlClass::WSDL_URL=>RESTFUL_AIRPORT_WSDL);
$a = new RFAirportServiceGet($wsdl);
/**
 * Details by city
 */
$a->GetDetailsByCity(new RFAirportTypeGetDetailsByCity('BORDEAUX'));
print_r($a);
/**
 * Details by airport name
 */
$a->GetDetailsByAirportName(new RFAirportTypeGetDetailsByAirportName('Charles De Gaulle'));
print_r($a);
/**
 * Geo
 */
$wsdl = array(
			RFGeoIPWsdlClass::WSDL_URL=>RESTFUL_GEOIP_WSDL);
$g = new RFGeoIPServiceAnalyse($wsdl);
$g->Analyse(new RFGeoIPTypeAnalyse('72.51.34.253'));
print_r($g);
/**
 * Weather
 */
$wsdl = array(
			RFWeatherForecastWsdlClass::WSDL_URL=>RESTFUL_WEATHER_WSDL);
$w = new RFWeatherForecastServiceGet($wsdl);
$w->GetForecastByCity(new RFWeatherForecastTypeGetForecastByCity('BORDEAUX','FRANCE'));
print_r($w);
/**
 * EMail
 */
$wsdl = array(
			RFEmailValidationWsdlClass::WSDL_URL=>RESTFUL_EMAIL_WSDL);
$e = new RFEmailValidationServiceValidate($wsdl);
$e->Validate(new RFEmailValidationTypeValidate('contact@google.com'));
print_r($e);
?>