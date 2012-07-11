<?php
/**
 * Class file for SOValidateCanadaServiceParse
 * @date 05/07/2012
 */
/**
 * Class SOValidateCanadaServiceParse
 * @date 05/07/2012
 */
class SOValidateCanadaServiceParse extends SOValidateCanadaWsdlClass
{
	/**
	 * Method to call ParseCanadianAddress
	 * Meta informations :
	 * 	- documentation : Parses a Canadian address, returning the address fragments.
	 * @uses SOValidateCanadaWsdlClass::getSoapClient()
	 * @uses SOValidateCanadaWsdlClass::setResult()
	 * @uses SOValidateCanadaWsdlClass::getResult()
	 * @uses SOValidateCanadaWsdlClass::saveLastError()
	 * @uses SOValidateCanadaTypeParseCanadianAddress::getAddress()
	 * @uses SOValidateCanadaTypeParseCanadianAddress::getMunicipality()
	 * @uses SOValidateCanadaTypeParseCanadianAddress::getProvince()
	 * @uses SOValidateCanadaTypeParseCanadianAddress::getPostalCode()
	 * @uses SOValidateCanadaTypeParseCanadianAddress::getLicenseKey()
	 * @param SOValidateCanadaTypeParseCanadianAddress ParseCanadianAddress
	 * @return SOValidateCanadaTypeParseCanadianAddressResponse
	 */
	public function ParseCanadianAddress(SOValidateCanadaTypeParseCanadianAddress $_SOValidateCanadaTypeParseCanadianAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ParseCanadianAddress(array('Address'=>$_SOValidateCanadaTypeParseCanadianAddress->getAddress(),'Municipality'=>$_SOValidateCanadaTypeParseCanadianAddress->getMunicipality(),'Province'=>$_SOValidateCanadaTypeParseCanadianAddress->getProvince(),'PostalCode'=>$_SOValidateCanadaTypeParseCanadianAddress->getPostalCode(),'LicenseKey'=>$_SOValidateCanadaTypeParseCanadianAddress->getLicenseKey())));
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
	 * @return SOValidateCanadaTypeParseCanadianAddressResponse
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