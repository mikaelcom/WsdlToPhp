<?php
/**
 * ClassMap 
 * @date 15/08/2012
 */
/**
 * ClassMap
 * @date 15/08/2012
 */
class RFGeoIPClassMap
{
	final public static function classMap()
	{
		return array (
  'GeoLocation' => 'RFGeoIPTypeGeoLocation',
  'Analyse' => 'RFGeoIPTypeAnalyse',
  'AnalyseResponse' => 'RFGeoIPTypeAnalyseResponse',
  'DefaultFaultContract' => 'RFGeoIPTypeDefaultFaultContract',
  'char' => 'RFGeoIPTypeChar',
  'duration' => 'RFGeoIPTypeDuration',
  'guid' => 'RFGeoIPTypeGuid',
);
	}
}
?>