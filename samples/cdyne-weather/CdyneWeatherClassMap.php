<?php
/**
 * ClassMap 
 * @date 02/07/2012
 */
/**
 * ClassMap
 * @date 02/07/2012
 */
class CdyneWeatherClassMap
{
	final public static function classMap()
	{
		return array (
  'GetWeatherInformation' => 'CdyneWeatherTypeGetWeatherInformation',
  'GetWeatherInformationResponse' => 'CdyneWeatherTypeGetWeatherInformationResponse',
  'ArrayOfWeatherDescription' => 'CdyneWeatherTypeArrayOfWeatherDescription',
  'WeatherDescription' => 'CdyneWeatherTypeWeatherDescription',
  'GetCityForecastByZIP' => 'CdyneWeatherTypeGetCityForecastByZIP',
  'GetCityForecastByZIPResponse' => 'CdyneWeatherTypeGetCityForecastByZIPResponse',
  'ForecastReturn' => 'CdyneWeatherTypeForecastReturn',
  'ArrayOfForecast' => 'CdyneWeatherTypeArrayOfForecast',
  'Forecast' => 'CdyneWeatherTypeForecast',
  'temp' => 'CdyneWeatherTypeTemp',
  'POP' => 'CdyneWeatherTypePOP',
  'GetCityWeatherByZIP' => 'CdyneWeatherTypeGetCityWeatherByZIP',
  'GetCityWeatherByZIPResponse' => 'CdyneWeatherTypeGetCityWeatherByZIPResponse',
  'WeatherReturn' => 'CdyneWeatherTypeWeatherReturn',
);
	}
}
?>