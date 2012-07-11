<?php
/**
 * Class file for EccConvertUnixTmpServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccConvertUnixTmpServiceGet
 * @date 03/07/2012
 */
class EccConvertUnixTmpServiceGet extends EccConvertUnixTmpWsdlClass
{
	/**
	 * Method to call GetSystemTime
	 * Meta informations :
	 * 	- documentation : Convert UNIX timestamp to System.DateTime
	 * @uses EccConvertUnixTmpWsdlClass::getSoapClient()
	 * @uses EccConvertUnixTmpWsdlClass::setResult()
	 * @uses EccConvertUnixTmpWsdlClass::getResult()
	 * @uses EccConvertUnixTmpWsdlClass::saveLastError()
	 * @uses EccConvertUnixTmpTypeGetSystemTime::getKeyID()
	 * @uses EccConvertUnixTmpTypeGetSystemTime::getDomainID()
	 * @uses EccConvertUnixTmpTypeGetSystemTime::getTime()
	 * @param EccConvertUnixTmpTypeGetSystemTime GetSystemTime
	 * @return EccConvertUnixTmpTypeGetSystemTimeResponse
	 */
	public function GetSystemTime(EccConvertUnixTmpTypeGetSystemTime $_EccConvertUnixTmpTypeGetSystemTime)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSystemTime(array('KeyID'=>$_EccConvertUnixTmpTypeGetSystemTime->getKeyID(),'DomainID'=>$_EccConvertUnixTmpTypeGetSystemTime->getDomainID(),'Time'=>$_EccConvertUnixTmpTypeGetSystemTime->getTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUnixTime
	 * Meta informations :
	 * 	- documentation : Convert System.DateTime to UNIX timestamp
	 * @uses EccConvertUnixTmpWsdlClass::getSoapClient()
	 * @uses EccConvertUnixTmpWsdlClass::setResult()
	 * @uses EccConvertUnixTmpWsdlClass::getResult()
	 * @uses EccConvertUnixTmpWsdlClass::saveLastError()
	 * @uses EccConvertUnixTmpTypeGetUnixTime::getKeyID()
	 * @uses EccConvertUnixTmpTypeGetUnixTime::getDomainID()
	 * @uses EccConvertUnixTmpTypeGetUnixTime::getTime()
	 * @param EccConvertUnixTmpTypeGetUnixTime GetUnixTime
	 * @return EccConvertUnixTmpTypeGetUnixTimeResponse
	 */
	public function GetUnixTime(EccConvertUnixTmpTypeGetUnixTime $_EccConvertUnixTmpTypeGetUnixTime)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUnixTime(array('KeyID'=>$_EccConvertUnixTmpTypeGetUnixTime->getKeyID(),'DomainID'=>$_EccConvertUnixTmpTypeGetUnixTime->getDomainID(),'Time'=>$_EccConvertUnixTmpTypeGetUnixTime->getTime())));
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
	 * @return EccConvertUnixTmpTypeGetUnixTimeResponse
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