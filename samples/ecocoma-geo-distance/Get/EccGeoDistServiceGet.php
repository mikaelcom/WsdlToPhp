<?php
/**
 * Class file for EccGeoDistServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccGeoDistServiceGet
 * @date 03/07/2012
 */
class EccGeoDistServiceGet extends EccGeoDistWsdlClass
{
	/**
	 * Method to call GetDistance
	 * Meta informations :
	 * 	- documentation : Get distance between two zipcode. (United States)
	 * @uses EccGeoDistWsdlClass::getSoapClient()
	 * @uses EccGeoDistWsdlClass::setResult()
	 * @uses EccGeoDistWsdlClass::getResult()
	 * @uses EccGeoDistWsdlClass::saveLastError()
	 * @uses EccGeoDistTypeGetDistance::getKeyID()
	 * @uses EccGeoDistTypeGetDistance::getDomainID()
	 * @uses EccGeoDistTypeGetDistance::getZipCode01()
	 * @uses EccGeoDistTypeGetDistance::getZipCode02()
	 * @param EccGeoDistTypeGetDistance GetDistance
	 * @return EccGeoDistTypeGetDistanceResponse
	 */
	public function GetDistance(EccGeoDistTypeGetDistance $_EccGeoDistTypeGetDistance)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDistance(array('KeyID'=>$_EccGeoDistTypeGetDistance->getKeyID(),'DomainID'=>$_EccGeoDistTypeGetDistance->getDomainID(),'ZipCode01'=>$_EccGeoDistTypeGetDistance->getZipCode01(),'ZipCode02'=>$_EccGeoDistTypeGetDistance->getZipCode02())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExtendDistance
	 * Meta informations :
	 * 	- documentation : Get distance between two addresses. (United States)
	 * @uses EccGeoDistWsdlClass::getSoapClient()
	 * @uses EccGeoDistWsdlClass::setResult()
	 * @uses EccGeoDistWsdlClass::getResult()
	 * @uses EccGeoDistWsdlClass::saveLastError()
	 * @uses EccGeoDistTypeGetExtendDistance::getKeyID()
	 * @uses EccGeoDistTypeGetExtendDistance::getDomainID()
	 * @uses EccGeoDistTypeGetExtendDistance::getAddress01()
	 * @uses EccGeoDistTypeGetExtendDistance::getAddress02()
	 * @param EccGeoDistTypeGetExtendDistance GetExtendDistance
	 * @return EccGeoDistTypeGetExtendDistanceResponse
	 */
	public function GetExtendDistance(EccGeoDistTypeGetExtendDistance $_EccGeoDistTypeGetExtendDistance)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendDistance(array('KeyID'=>$_EccGeoDistTypeGetExtendDistance->getKeyID(),'DomainID'=>$_EccGeoDistTypeGetExtendDistance->getDomainID(),'Address01'=>$_EccGeoDistTypeGetExtendDistance->getAddress01(),'Address02'=>$_EccGeoDistTypeGetExtendDistance->getAddress02())));
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
	 * @return EccGeoDistTypeGetExtendDistanceResponse
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