<?php
/**
 * ClassMap 
 * @date 08/07/2012
 */
/**
 * ClassMap
 * @date 08/07/2012
 */
class SOGeoCashClassMap
{
	final public static function classMap()
	{
		return array (
  'GetATMLocations' => 'SOGeoCashTypeGetATMLocations',
  'GetATMLocationsResponse' => 'SOGeoCashTypeGetATMLocationsResponse',
  'ATMLocations' => 'SOGeoCashTypeATMLocations',
  'ATM' => 'SOGeoCashTypeATM',
  'Err' => 'SOGeoCashTypeErr',
  'GetATMLocationsByZipRadius' => 'SOGeoCashTypeGetATMLocationsByZipRadius',
  'GetATMLocationsByZipRadiusResponse' => 'SOGeoCashTypeGetATMLocationsByZipRadiusResponse',
  'GetATMLocationsByZipStreet' => 'SOGeoCashTypeGetATMLocationsByZipStreet',
  'GetATMLocationsByZipStreetResponse' => 'SOGeoCashTypeGetATMLocationsByZipStreetResponse',
  'GetATMLocationsByCityState' => 'SOGeoCashTypeGetATMLocationsByCityState',
  'GetATMLocationsByCityStateResponse' => 'SOGeoCashTypeGetATMLocationsByCityStateResponse',
);
	}
}
?>