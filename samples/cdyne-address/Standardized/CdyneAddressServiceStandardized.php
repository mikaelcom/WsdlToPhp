<?php
/**
 * Class file for CdyneAddressServiceStandardized
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressServiceStandardized
 * @date 02/07/2012
 */
class CdyneAddressServiceStandardized extends CdyneAddressWsdlClass
{
	/**
	 * Method to call StandardizedAddress
	 * Meta informations :
	 * 	- documentation : This method is called by all Standard Address Routines and allows more interaction with the address system.
	 * @uses CdyneAddressWsdlClass::getSoapClient()
	 * @uses CdyneAddressWsdlClass::setResult()
	 * @uses CdyneAddressWsdlClass::getResult()
	 * @uses CdyneAddressWsdlClass::saveLastError()
	 * @uses CdyneAddressTypeStandardizedAddress::getAddressToCheck()
	 * @uses CdyneAddressTypeStandardizedAddress::getLicenseKey()
	 * @param CdyneAddressTypeStandardizedAddress StandardizedAddress
	 * @return CdyneAddressTypeStandardizedAddressResponse
	 */
	public function StandardizedAddress(CdyneAddressTypeStandardizedAddress $_CdyneAddressTypeStandardizedAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->StandardizedAddress(array('addressToCheck'=>$_CdyneAddressTypeStandardizedAddress->getAddressToCheck(),'LicenseKey'=>$_CdyneAddressTypeStandardizedAddress->getLicenseKey())));
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
	 * @return CdyneAddressTypeStandardizedAddressResponse
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