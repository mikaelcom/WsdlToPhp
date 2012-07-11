<?php
/**
 * Class file for CdyneAddressServiceAdvanced
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressServiceAdvanced
 * @date 02/07/2012
 */
class CdyneAddressServiceAdvanced extends CdyneAddressWsdlClass
{
	/**
	 * Method to call AdvancedStandardization
	 * Meta informations :
	 * 	- documentation : This method is called by all advanced address checking methods and allows for a deeper interface with the address correction.
	 * @uses CdyneAddressWsdlClass::getSoapClient()
	 * @uses CdyneAddressWsdlClass::setResult()
	 * @uses CdyneAddressWsdlClass::getResult()
	 * @uses CdyneAddressWsdlClass::saveLastError()
	 * @uses CdyneAddressTypeAdvancedStandardization::getAddressToCheck()
	 * @uses CdyneAddressTypeAdvancedStandardization::getLicenseKey()
	 * @param CdyneAddressTypeAdvancedStandardization AdvancedStandardization
	 * @return CdyneAddressTypeAdvancedStandardizationResponse
	 */
	public function AdvancedStandardization(CdyneAddressTypeAdvancedStandardization $_CdyneAddressTypeAdvancedStandardization)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AdvancedStandardization(array('addressToCheck'=>$_CdyneAddressTypeAdvancedStandardization->getAddressToCheck(),'LicenseKey'=>$_CdyneAddressTypeAdvancedStandardization->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AdvancedCheckAddress
	 * Meta informations :
	 * 	- documentation : This method checks an address with 2 lines and returns all possible matches.
	 * @uses CdyneAddressWsdlClass::getSoapClient()
	 * @uses CdyneAddressWsdlClass::setResult()
	 * @uses CdyneAddressWsdlClass::getResult()
	 * @uses CdyneAddressWsdlClass::saveLastError()
	 * @uses CdyneAddressTypeAdvancedCheckAddress::getAddressLine()
	 * @uses CdyneAddressTypeAdvancedCheckAddress::getAddressLine2()
	 * @uses CdyneAddressTypeAdvancedCheckAddress::getZipCode()
	 * @uses CdyneAddressTypeAdvancedCheckAddress::getCity()
	 * @uses CdyneAddressTypeAdvancedCheckAddress::getStateAbbrev()
	 * @uses CdyneAddressTypeAdvancedCheckAddress::getLicenseKey()
	 * @param CdyneAddressTypeAdvancedCheckAddress AdvancedCheckAddress
	 * @return CdyneAddressTypeAdvancedCheckAddressResponse
	 */
	public function AdvancedCheckAddress(CdyneAddressTypeAdvancedCheckAddress $_CdyneAddressTypeAdvancedCheckAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AdvancedCheckAddress(array('AddressLine'=>$_CdyneAddressTypeAdvancedCheckAddress->getAddressLine(),'AddressLine2'=>$_CdyneAddressTypeAdvancedCheckAddress->getAddressLine2(),'ZipCode'=>$_CdyneAddressTypeAdvancedCheckAddress->getZipCode(),'City'=>$_CdyneAddressTypeAdvancedCheckAddress->getCity(),'StateAbbrev'=>$_CdyneAddressTypeAdvancedCheckAddress->getStateAbbrev(),'LicenseKey'=>$_CdyneAddressTypeAdvancedCheckAddress->getLicenseKey())));
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
	 * @return CdyneAddressTypeAdvancedCheckAddressResponse
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