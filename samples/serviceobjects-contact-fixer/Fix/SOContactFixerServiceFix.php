<?php
/**
 * Class file for SOContactFixerServiceFix
 * @date 08/07/2012
 */
/**
 * Class SOContactFixerServiceFix
 * @date 08/07/2012
 */
class SOContactFixerServiceFix extends SOContactFixerWsdlClass
{
	/**
	 * Method to call FixBusinessContact
	 * @uses SOContactFixerWsdlClass::getSoapClient()
	 * @uses SOContactFixerWsdlClass::setResult()
	 * @uses SOContactFixerWsdlClass::getResult()
	 * @uses SOContactFixerWsdlClass::saveLastError()
	 * @uses SOContactFixerTypeFixBusinessContact::getBusinessName()
	 * @uses SOContactFixerTypeFixBusinessContact::getAddress()
	 * @uses SOContactFixerTypeFixBusinessContact::getAddress2()
	 * @uses SOContactFixerTypeFixBusinessContact::getCity()
	 * @uses SOContactFixerTypeFixBusinessContact::getState()
	 * @uses SOContactFixerTypeFixBusinessContact::getPostalCode()
	 * @uses SOContactFixerTypeFixBusinessContact::getPhone()
	 * @uses SOContactFixerTypeFixBusinessContact::getEmail()
	 * @uses SOContactFixerTypeFixBusinessContact::getLicenseKey()
	 * @param SOContactFixerTypeFixBusinessContact FixBusinessContact
	 * @return SOContactFixerTypeFixBusinessContactResponse
	 */
	public function FixBusinessContact(SOContactFixerTypeFixBusinessContact $_SOContactFixerTypeFixBusinessContact)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FixBusinessContact(array('BusinessName'=>$_SOContactFixerTypeFixBusinessContact->getBusinessName(),'Address'=>$_SOContactFixerTypeFixBusinessContact->getAddress(),'Address2'=>$_SOContactFixerTypeFixBusinessContact->getAddress2(),'City'=>$_SOContactFixerTypeFixBusinessContact->getCity(),'State'=>$_SOContactFixerTypeFixBusinessContact->getState(),'PostalCode'=>$_SOContactFixerTypeFixBusinessContact->getPostalCode(),'Phone'=>$_SOContactFixerTypeFixBusinessContact->getPhone(),'Email'=>$_SOContactFixerTypeFixBusinessContact->getEmail(),'LicenseKey'=>$_SOContactFixerTypeFixBusinessContact->getLicenseKey())));
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
	 * @return SOContactFixerTypeFixBusinessContactResponse
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