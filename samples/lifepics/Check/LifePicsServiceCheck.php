<?php
/**
 * Class file for LifePicsServiceCheck
 * @date 02/08/2012
 */
/**
 * Class LifePicsServiceCheck
 * @date 02/08/2012
 */
class LifePicsServiceCheck extends LifePicsWsdlClass
{
	/**
	 * Method to call CheckLocationStatus
	 * Meta informations :
	 * 	- documentation : Used to check information is correct for a location id
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeCheckLocationStatus::getSessionID()
	 * @uses LifePicsTypeCheckLocationStatus::getLocationID()
	 * @param LifePicsTypeCheckLocationStatus CheckLocationStatus
	 * @return LifePicsTypeCheckLocationStatusResponse
	 */
	public function CheckLocationStatus(LifePicsTypeCheckLocationStatus $_LifePicsTypeCheckLocationStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CheckLocationStatus(array('SessionID'=>$_LifePicsTypeCheckLocationStatus->getSessionID(),'LocationID'=>$_LifePicsTypeCheckLocationStatus->getLocationID())));
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
	 * @return LifePicsTypeCheckLocationStatusResponse
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