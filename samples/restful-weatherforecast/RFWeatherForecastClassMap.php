<?php
/**
 * ClassMap 
 * @date 15/08/2012
 */
/**
 * ClassMap
 * @date 15/08/2012
 */
class RFWeatherForecastClassMap
{
	final public static function classMap()
	{
		return array (
  'ArrayOfstring' => 'RFWeatherForecastTypeArrayOfstring',
  'Weather' => 'RFWeatherForecastTypeWeather',
  'GetCitiesByCountry' => 'RFWeatherForecastTypeGetCitiesByCountry',
  'GetCitiesByCountryResponse' => 'RFWeatherForecastTypeGetCitiesByCountryResponse',
  'GetForecastByCity' => 'RFWeatherForecastTypeGetForecastByCity',
  'GetForecastByCityResponse' => 'RFWeatherForecastTypeGetForecastByCityResponse',
  'DefaultFaultContract' => 'RFWeatherForecastTypeDefaultFaultContract',
  'char' => 'RFWeatherForecastTypeChar',
  'duration' => 'RFWeatherForecastTypeDuration',
  'guid' => 'RFWeatherForecastTypeGuid',
);
	}
}
?>