<?php
/**
 * Class file for SODisconnectedServiceGet
 * @date 08/07/2012
 */
/**
 * Class SODisconnectedServiceGet
 * @date 08/07/2012
 */
class SODisconnectedServiceGet extends SODisconnectedWsdlClass
{
	/**
	 * Method to call GetDisconnectedInfo
	 * Meta informations :
	 * 	- documentation : Returns Disconnected Information for the given phone number.
	 * @uses SODisconnectedWsdlClass::getSoapClient()
	 * @uses SODisconnectedWsdlClass::setResult()
	 * @uses SODisconnectedWsdlClass::getResult()
	 * @uses SODisconnectedWsdlClass::saveLastError()
	 * @uses SODisconnectedTypeGetDisconnectedInfo::getPhoneNumber()
	 * @uses SODisconnectedTypeGetDisconnectedInfo::getLicenseKey()
	 * @param SODisconnectedTypeGetDisconnectedInfo GetDisconnectedInfo
	 * @return SODisconnectedTypeGetDisconnectedInfoResponse
	 */
	public function GetDisconnectedInfo(SODisconnectedTypeGetDisconnectedInfo $_SODisconnectedTypeGetDisconnectedInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDisconnectedInfo(array('PhoneNumber'=>$_SODisconnectedTypeGetDisconnectedInfo->getPhoneNumber(),'LicenseKey'=>$_SODisconnectedTypeGetDisconnectedInfo->getLicenseKey())));
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
	 * @return SODisconnectedTypeGetDisconnectedInfoResponse
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