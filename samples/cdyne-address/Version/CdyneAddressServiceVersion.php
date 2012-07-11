<?php
/**
 * Class file for CdyneAddressServiceVersion
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressServiceVersion
 * @date 02/07/2012
 */
class CdyneAddressServiceVersion extends CdyneAddressWsdlClass
{
	/**
	 * Method to call VersionInformation
	 * Meta informations :
	 * 	- documentation : Views the latest version information
	 * @uses CdyneAddressWsdlClass::getSoapClient()
	 * @uses CdyneAddressWsdlClass::setResult()
	 * @uses CdyneAddressWsdlClass::getResult()
	 * @uses CdyneAddressWsdlClass::saveLastError()
	 * @param CdyneAddressTypeVersionInformation VersionInformation
	 * @return CdyneAddressTypeVersionInformationResponse
	 */
	public function VersionInformation(CdyneAddressTypeVersionInformation $_CdyneAddressTypeVersionInformation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->VersionInformation(array()));
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
	 * @return CdyneAddressTypeVersionInformationResponse
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