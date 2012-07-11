<?php
/**
 * Class file for CdyneAddressServiceCheck
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressServiceCheck
 * @date 02/07/2012
 */
class CdyneAddressServiceCheck extends CdyneAddressWsdlClass
{
	/**
	 * Method to call CheckAddress
	 * Meta informations :
	 * 	- documentation : This method checks an address with 1 line and only returns 1 match.
	 * @uses CdyneAddressWsdlClass::getSoapClient()
	 * @uses CdyneAddressWsdlClass::setResult()
	 * @uses CdyneAddressWsdlClass::getResult()
	 * @uses CdyneAddressWsdlClass::saveLastError()
	 * @uses CdyneAddressTypeCheckAddress::getAddressLine()
	 * @uses CdyneAddressTypeCheckAddress::getZipCode()
	 * @uses CdyneAddressTypeCheckAddress::getCity()
	 * @uses CdyneAddressTypeCheckAddress::getStateAbbrev()
	 * @uses CdyneAddressTypeCheckAddress::getLicenseKey()
	 * @param CdyneAddressTypeCheckAddress CheckAddress
	 * @return CdyneAddressTypeCheckAddressResponse
	 */
	public function CheckAddress(CdyneAddressTypeCheckAddress $_CdyneAddressTypeCheckAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CheckAddress(array('AddressLine'=>$_CdyneAddressTypeCheckAddress->getAddressLine(),'ZipCode'=>$_CdyneAddressTypeCheckAddress->getZipCode(),'City'=>$_CdyneAddressTypeCheckAddress->getCity(),'StateAbbrev'=>$_CdyneAddressTypeCheckAddress->getStateAbbrev(),'LicenseKey'=>$_CdyneAddressTypeCheckAddress->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CheckAddressW2lines
	 * Meta informations :
	 * 	- documentation : This method checks an address with 2 lines and only returns 1 possible match.
	 * @uses CdyneAddressWsdlClass::getSoapClient()
	 * @uses CdyneAddressWsdlClass::setResult()
	 * @uses CdyneAddressWsdlClass::getResult()
	 * @uses CdyneAddressWsdlClass::saveLastError()
	 * @uses CdyneAddressTypeCheckAddressW2lines::getAddressLine()
	 * @uses CdyneAddressTypeCheckAddressW2lines::getAddressLine2()
	 * @uses CdyneAddressTypeCheckAddressW2lines::getZipCode()
	 * @uses CdyneAddressTypeCheckAddressW2lines::getCity()
	 * @uses CdyneAddressTypeCheckAddressW2lines::getStateAbbrev()
	 * @uses CdyneAddressTypeCheckAddressW2lines::getLicenseKey()
	 * @param CdyneAddressTypeCheckAddressW2lines CheckAddressW2lines
	 * @return CdyneAddressTypeCheckAddressW2linesResponse
	 */
	public function CheckAddressW2lines(CdyneAddressTypeCheckAddressW2lines $_CdyneAddressTypeCheckAddressW2lines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CheckAddressW2lines(array('AddressLine'=>$_CdyneAddressTypeCheckAddressW2lines->getAddressLine(),'AddressLine2'=>$_CdyneAddressTypeCheckAddressW2lines->getAddressLine2(),'ZipCode'=>$_CdyneAddressTypeCheckAddressW2lines->getZipCode(),'City'=>$_CdyneAddressTypeCheckAddressW2lines->getCity(),'StateAbbrev'=>$_CdyneAddressTypeCheckAddressW2lines->getStateAbbrev(),'LicenseKey'=>$_CdyneAddressTypeCheckAddressW2lines->getLicenseKey())));
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
	 * @return CdyneAddressTypeCheckAddressW2linesResponse
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