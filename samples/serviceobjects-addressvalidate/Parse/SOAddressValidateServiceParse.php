<?php
/**
 * Class file for SOAddressValidateServiceParse
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateServiceParse
 * @date 05/07/2012
 */
class SOAddressValidateServiceParse extends SOAddressValidateWsdlClass
{
	/**
	 * Method to call ParseAddress
	 * Meta informations :
	 * 	- documentation : Returns corrected address information and street address fragments for a given US postal address. If information is not found, address will be parsed.
	 * @uses SOAddressValidateWsdlClass::getSoapClient()
	 * @uses SOAddressValidateWsdlClass::setResult()
	 * @uses SOAddressValidateWsdlClass::getResult()
	 * @uses SOAddressValidateWsdlClass::saveLastError()
	 * @uses SOAddressValidateTypeParseAddress::getAddress()
	 * @uses SOAddressValidateTypeParseAddress::getCity()
	 * @uses SOAddressValidateTypeParseAddress::getState()
	 * @uses SOAddressValidateTypeParseAddress::getPostalCode()
	 * @uses SOAddressValidateTypeParseAddress::getLicenseKey()
	 * @param SOAddressValidateTypeParseAddress ParseAddress
	 * @return SOAddressValidateTypeParseAddressResponse
	 */
	public function ParseAddress(SOAddressValidateTypeParseAddress $_SOAddressValidateTypeParseAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ParseAddress(array('Address'=>$_SOAddressValidateTypeParseAddress->getAddress(),'City'=>$_SOAddressValidateTypeParseAddress->getCity(),'State'=>$_SOAddressValidateTypeParseAddress->getState(),'PostalCode'=>$_SOAddressValidateTypeParseAddress->getPostalCode(),'LicenseKey'=>$_SOAddressValidateTypeParseAddress->getLicenseKey())));
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
	 * @return SOAddressValidateTypeParseAddressResponse
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