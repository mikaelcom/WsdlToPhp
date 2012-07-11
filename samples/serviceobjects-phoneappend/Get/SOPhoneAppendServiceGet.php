<?php
/**
 * Class file for SOPhoneAppendServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOPhoneAppendServiceGet
 * @date 08/07/2012
 */
class SOPhoneAppendServiceGet extends SOPhoneAppendWsdlClass
{
	/**
	 * Method to call GetPhoneAppend
	 * Meta informations :
	 * 	- documentation : Returns the phone number for a given address and Name. All parameters are optional.
	 * @uses SOPhoneAppendWsdlClass::getSoapClient()
	 * @uses SOPhoneAppendWsdlClass::setResult()
	 * @uses SOPhoneAppendWsdlClass::getResult()
	 * @uses SOPhoneAppendWsdlClass::saveLastError()
	 * @uses SOPhoneAppendTypeGetPhoneAppend::getFirstName()
	 * @uses SOPhoneAppendTypeGetPhoneAppend::getLastName()
	 * @uses SOPhoneAppendTypeGetPhoneAppend::getAddress()
	 * @uses SOPhoneAppendTypeGetPhoneAppend::getCity()
	 * @uses SOPhoneAppendTypeGetPhoneAppend::getState()
	 * @uses SOPhoneAppendTypeGetPhoneAppend::getZip()
	 * @uses SOPhoneAppendTypeGetPhoneAppend::getLicenseKey()
	 * @param SOPhoneAppendTypeGetPhoneAppend GetPhoneAppend
	 * @return SOPhoneAppendTypeGetPhoneAppendResponse
	 */
	public function GetPhoneAppend(SOPhoneAppendTypeGetPhoneAppend $_SOPhoneAppendTypeGetPhoneAppend)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPhoneAppend(array('FirstName'=>$_SOPhoneAppendTypeGetPhoneAppend->getFirstName(),'LastName'=>$_SOPhoneAppendTypeGetPhoneAppend->getLastName(),'Address'=>$_SOPhoneAppendTypeGetPhoneAppend->getAddress(),'City'=>$_SOPhoneAppendTypeGetPhoneAppend->getCity(),'State'=>$_SOPhoneAppendTypeGetPhoneAppend->getState(),'Zip'=>$_SOPhoneAppendTypeGetPhoneAppend->getZip(),'LicenseKey'=>$_SOPhoneAppendTypeGetPhoneAppend->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBusinessPhoneAppend
	 * Meta informations :
	 * 	- documentation : Returns the phone number for a business given the name and address. All parameters are optional.
	 * @uses SOPhoneAppendWsdlClass::getSoapClient()
	 * @uses SOPhoneAppendWsdlClass::setResult()
	 * @uses SOPhoneAppendWsdlClass::getResult()
	 * @uses SOPhoneAppendWsdlClass::saveLastError()
	 * @uses SOPhoneAppendTypeGetBusinessPhoneAppend::getBusinessName()
	 * @uses SOPhoneAppendTypeGetBusinessPhoneAppend::getAddress()
	 * @uses SOPhoneAppendTypeGetBusinessPhoneAppend::getCity()
	 * @uses SOPhoneAppendTypeGetBusinessPhoneAppend::getState()
	 * @uses SOPhoneAppendTypeGetBusinessPhoneAppend::getZip()
	 * @uses SOPhoneAppendTypeGetBusinessPhoneAppend::getLicenseKey()
	 * @param SOPhoneAppendTypeGetBusinessPhoneAppend GetBusinessPhoneAppend
	 * @return SOPhoneAppendTypeGetBusinessPhoneAppendResponse
	 */
	public function GetBusinessPhoneAppend(SOPhoneAppendTypeGetBusinessPhoneAppend $_SOPhoneAppendTypeGetBusinessPhoneAppend)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBusinessPhoneAppend(array('BusinessName'=>$_SOPhoneAppendTypeGetBusinessPhoneAppend->getBusinessName(),'Address'=>$_SOPhoneAppendTypeGetBusinessPhoneAppend->getAddress(),'City'=>$_SOPhoneAppendTypeGetBusinessPhoneAppend->getCity(),'State'=>$_SOPhoneAppendTypeGetBusinessPhoneAppend->getState(),'Zip'=>$_SOPhoneAppendTypeGetBusinessPhoneAppend->getZip(),'LicenseKey'=>$_SOPhoneAppendTypeGetBusinessPhoneAppend->getLicenseKey())));
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
	 * @return SOPhoneAppendTypeGetBusinessPhoneAppendResponse
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