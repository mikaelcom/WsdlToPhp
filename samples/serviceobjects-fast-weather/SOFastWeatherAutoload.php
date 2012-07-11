<?php
/**
 * AutoloadFile 
 * @date 08/07/2012
 */
/**
 * AutoloadFile
 * @date 08/07/2012
 */
require_once dirname(__FILE__) . '/SOFastWeatherWsdlClass.php';
require_once dirname(__FILE__) . '/Get/WMOID/SOFastWeatherTypeGetWeatherByWMOID.php';
require_once dirname(__FILE__) . '/Get/Response/SOFastWeatherTypeGetWeatherByWMOIDResponse.php';
require_once dirname(__FILE__) . '/Get/Response/SOFastWeatherTypeGetWeatherHistoricalByZipResponse.php';
require_once dirname(__FILE__) . '/Get/Zip/SOFastWeatherTypeGetWeatherHistoricalByZip.php';
require_once dirname(__FILE__) . '/Get/IP/SOFastWeatherTypeGetWeatherByIP.php';
require_once dirname(__FILE__) . '/Get/Response/SOFastWeatherTypeGetWeatherByIPResponse.php';
require_once dirname(__FILE__) . '/Get/City/SOFastWeatherTypeGetWMOIDByCity.php';
require_once dirname(__FILE__) . '/Get/Response/SOFastWeatherTypeGetWMOIDByCityResponse.php';
require_once dirname(__FILE__) . '/Get/Response/SOFastWeatherTypeGetWeatherByStationIDResponse.php';
require_once dirname(__FILE__) . '/Weather/Station/SOFastWeatherTypeWeatherByStation.php';
require_once dirname(__FILE__) . '/Get/ID/SOFastWeatherTypeGetWeatherByStationID.php';
require_once dirname(__FILE__) . '/WMOID/SOFastWeatherTypeWMOID.php';
require_once dirname(__FILE__) . '/WMOIDI/Nfo/SOFastWeatherTypeWMOIDInfo.php';
require_once dirname(__FILE__) . '/Get/Response/SOFastWeatherTypeGetWarningsByStateResponse.php';
require_once dirname(__FILE__) . '/Get/State/SOFastWeatherTypeGetWarningsByState.php';
require_once dirname(__FILE__) . '/Get/Response/SOFastWeatherTypeGetWeatherByCityStateResponse.php';
require_once dirname(__FILE__) . '/Get/Zip/SOFastWeatherTypeGetFiveDayForecastByZip.php';
require_once dirname(__FILE__) . '/Get/State/SOFastWeatherTypeGetWeatherByCityState.php';
require_once dirname(__FILE__) . '/Err/SOFastWeatherTypeErr.php';
require_once dirname(__FILE__) . '/Get/Response/SOFastWeatherTypeGetWeatherByZipResponse.php';
require_once dirname(__FILE__) . '/Weather/SOFastWeatherTypeWeather.php';
require_once dirname(__FILE__) . '/Get/Response/SOFastWeatherTypeGetFiveDayForecastByZipResponse.php';
require_once dirname(__FILE__) . '/Array/Forecast/SOFastWeatherTypeArrayOfForecast.php';
require_once dirname(__FILE__) . '/Array/Warning/SOFastWeatherTypeArrayOfWarning.php';
require_once dirname(__FILE__) . '/Warning/SOFastWeatherTypeWarning.php';
require_once dirname(__FILE__) . '/Get/Response/SOFastWeatherTypeGetWarningsByZipResponse.php';
require_once dirname(__FILE__) . '/Get/Zip/SOFastWeatherTypeGetWarningsByZip.php';
require_once dirname(__FILE__) . '/Forecast/SOFastWeatherTypeForecast.php';
require_once dirname(__FILE__) . '/Get/Zip/SOFastWeatherTypeGetWeatherByZip.php';
require_once dirname(__FILE__) . '/Get/SOFastWeatherServiceGet.php';
require_once dirname(__FILE__) . '/SOFastWeatherClassMap.php';
?>