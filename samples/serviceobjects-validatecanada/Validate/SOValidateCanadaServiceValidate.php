<?php
/**
 * Class file for SOValidateCanadaServiceValidate
 * @date 05/07/2012
 */
/**
 * Class SOValidateCanadaServiceValidate
 * @date 05/07/2012
 */
class SOValidateCanadaServiceValidate extends SOValidateCanadaWsdlClass
{
	/**
	 * Method to call ValidateCanadianAddress
	 * Meta informations :
	 * 	- documentation : Returns corrected address information for a given Canadian postal address.
	 * @uses SOValidateCanadaWsdlClass::getSoapClient()
	 * @uses SOValidateCanadaWsdlClass::setResult()
	 * @uses SOValidateCanadaWsdlClass::getResult()
	 * @uses SOValidateCanadaWsdlClass::saveLastError()
	 * @uses SOValidateCanadaTypeValidateCanadianAddress::getAddress()
	 * @uses SOValidateCanadaTypeValidateCanadianAddress::getMunicipality()
	 * @uses SOValidateCanadaTypeValidateCanadianAddress::getProvince()
	 * @uses SOValidateCanadaTypeValidateCanadianAddress::getPostalCode()
	 * @uses SOValidateCanadaTypeValidateCanadianAddress::getLicenseKey()
	 * @param SOValidateCanadaTypeValidateCanadianAddress ValidateCanadianAddress
	 * @return SOValidateCanadaTypeValidateCanadianAddressResponse
	 */
	public function ValidateCanadianAddress(SOValidateCanadaTypeValidateCanadianAddress $_SOValidateCanadaTypeValidateCanadianAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateCanadianAddress(array('Address'=>$_SOValidateCanadaTypeValidateCanadianAddress->getAddress(),'Municipality'=>$_SOValidateCanadaTypeValidateCanadianAddress->getMunicipality(),'Province'=>$_SOValidateCanadaTypeValidateCanadianAddress->getProvince(),'PostalCode'=>$_SOValidateCanadaTypeValidateCanadianAddress->getPostalCode(),'LicenseKey'=>$_SOValidateCanadaTypeValidateCanadianAddress->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateCanadianAddressWithExtras
	 * Meta informations :
	 * 	- documentation : Returns corrected address information for a given Canadian postal address. Includes Address2 field for other important information.
	 * @uses SOValidateCanadaWsdlClass::getSoapClient()
	 * @uses SOValidateCanadaWsdlClass::setResult()
	 * @uses SOValidateCanadaWsdlClass::getResult()
	 * @uses SOValidateCanadaWsdlClass::saveLastError()
	 * @uses SOValidateCanadaTypeValidateCanadianAddressWithExtras::getAddress()
	 * @uses SOValidateCanadaTypeValidateCanadianAddressWithExtras::getAddress2()
	 * @uses SOValidateCanadaTypeValidateCanadianAddressWithExtras::getMunicipality()
	 * @uses SOValidateCanadaTypeValidateCanadianAddressWithExtras::getProvince()
	 * @uses SOValidateCanadaTypeValidateCanadianAddressWithExtras::getPostalCode()
	 * @uses SOValidateCanadaTypeValidateCanadianAddressWithExtras::getLicenseKey()
	 * @param SOValidateCanadaTypeValidateCanadianAddressWithExtras ValidateCanadianAddressWithExtras
	 * @return SOValidateCanadaTypeValidateCanadianAddressWithExtrasResponse
	 */
	public function ValidateCanadianAddressWithExtras(SOValidateCanadaTypeValidateCanadianAddressWithExtras $_SOValidateCanadaTypeValidateCanadianAddressWithExtras)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateCanadianAddressWithExtras(array('Address'=>$_SOValidateCanadaTypeValidateCanadianAddressWithExtras->getAddress(),'Address2'=>$_SOValidateCanadaTypeValidateCanadianAddressWithExtras->getAddress2(),'Municipality'=>$_SOValidateCanadaTypeValidateCanadianAddressWithExtras->getMunicipality(),'Province'=>$_SOValidateCanadaTypeValidateCanadianAddressWithExtras->getProvince(),'PostalCode'=>$_SOValidateCanadaTypeValidateCanadianAddressWithExtras->getPostalCode(),'LicenseKey'=>$_SOValidateCanadaTypeValidateCanadianAddressWithExtras->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateCanadianMunicipalityProvince
	 * Meta informations :
	 * 	- documentation : Returns corrected address information for a given Canadian postal address.
	 * @uses SOValidateCanadaWsdlClass::getSoapClient()
	 * @uses SOValidateCanadaWsdlClass::setResult()
	 * @uses SOValidateCanadaWsdlClass::getResult()
	 * @uses SOValidateCanadaWsdlClass::saveLastError()
	 * @uses SOValidateCanadaTypeValidateCanadianMunicipalityProvince::getMunicipality()
	 * @uses SOValidateCanadaTypeValidateCanadianMunicipalityProvince::getProvince()
	 * @uses SOValidateCanadaTypeValidateCanadianMunicipalityProvince::getPostalCode()
	 * @uses SOValidateCanadaTypeValidateCanadianMunicipalityProvince::getLicenseKey()
	 * @param SOValidateCanadaTypeValidateCanadianMunicipalityProvince ValidateCanadianMunicipalityProvince
	 * @return SOValidateCanadaTypeValidateCanadianMunicipalityProvinceResponse
	 */
	public function ValidateCanadianMunicipalityProvince(SOValidateCanadaTypeValidateCanadianMunicipalityProvince $_SOValidateCanadaTypeValidateCanadianMunicipalityProvince)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateCanadianMunicipalityProvince(array('Municipality'=>$_SOValidateCanadaTypeValidateCanadianMunicipalityProvince->getMunicipality(),'Province'=>$_SOValidateCanadaTypeValidateCanadianMunicipalityProvince->getProvince(),'PostalCode'=>$_SOValidateCanadaTypeValidateCanadianMunicipalityProvince->getPostalCode(),'LicenseKey'=>$_SOValidateCanadaTypeValidateCanadianMunicipalityProvince->getLicenseKey())));
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
	 * @return SOValidateCanadaTypeValidateCanadianMunicipalityProvinceResponse
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