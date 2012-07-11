<?php
/**
 * Class file for CdyneAddressServiceCalculate
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressServiceCalculate
 * @date 02/07/2012
 */
class CdyneAddressServiceCalculate extends CdyneAddressWsdlClass
{
	/**
	 * Method to call CalculateDistanceInMiles
	 * Meta informations :
	 * 	- documentation : Calculates the distance between two areas using longitude and latitude. This is calculated using spherical geometry. This is a free function. You can get the calculations behind this function via support@cdyne.com .
	 * @uses CdyneAddressWsdlClass::getSoapClient()
	 * @uses CdyneAddressWsdlClass::setResult()
	 * @uses CdyneAddressWsdlClass::getResult()
	 * @uses CdyneAddressWsdlClass::saveLastError()
	 * @uses CdyneAddressTypeCalculateDistanceInMiles::getLatitude1()
	 * @uses CdyneAddressTypeCalculateDistanceInMiles::getLongitude1()
	 * @uses CdyneAddressTypeCalculateDistanceInMiles::getLatitude2()
	 * @uses CdyneAddressTypeCalculateDistanceInMiles::getLongitude2()
	 * @param CdyneAddressTypeCalculateDistanceInMiles CalculateDistanceInMiles
	 * @return CdyneAddressTypeCalculateDistanceInMilesResponse
	 */
	public function CalculateDistanceInMiles(CdyneAddressTypeCalculateDistanceInMiles $_CdyneAddressTypeCalculateDistanceInMiles)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CalculateDistanceInMiles(array('latitude1'=>$_CdyneAddressTypeCalculateDistanceInMiles->getLatitude1(),'longitude1'=>$_CdyneAddressTypeCalculateDistanceInMiles->getLongitude1(),'latitude2'=>$_CdyneAddressTypeCalculateDistanceInMiles->getLatitude2(),'longitude2'=>$_CdyneAddressTypeCalculateDistanceInMiles->getLongitude2())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return CdyneAddressTypeCalculateDistanceInMilesResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>