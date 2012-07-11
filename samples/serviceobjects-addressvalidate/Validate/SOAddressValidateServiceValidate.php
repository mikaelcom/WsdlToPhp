<?php
/**
 * Class file for SOAddressValidateServiceValidate
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateServiceValidate
 * @date 05/07/2012
 */
class SOAddressValidateServiceValidate extends SOAddressValidateWsdlClass
{
	/**
	 * Method to call ValidateAddress
	 * Meta informations :
	 * 	- documentation : Returns corrected address information for a given US postal address.
	 * @uses SOAddressValidateWsdlClass::getSoapClient()
	 * @uses SOAddressValidateWsdlClass::setResult()
	 * @uses SOAddressValidateWsdlClass::getResult()
	 * @uses SOAddressValidateWsdlClass::saveLastError()
	 * @uses SOAddressValidateTypeValidateAddress::getAddress()
	 * @uses SOAddressValidateTypeValidateAddress::getCity()
	 * @uses SOAddressValidateTypeValidateAddress::getState()
	 * @uses SOAddressValidateTypeValidateAddress::getPostalCode()
	 * @uses SOAddressValidateTypeValidateAddress::getLicenseKey()
	 * @param SOAddressValidateTypeValidateAddress ValidateAddress
	 * @return SOAddressValidateTypeValidateAddressResponse
	 */
	public function ValidateAddress(SOAddressValidateTypeValidateAddress $_SOAddressValidateTypeValidateAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateAddress(array('Address'=>$_SOAddressValidateTypeValidateAddress->getAddress(),'City'=>$_SOAddressValidateTypeValidateAddress->getCity(),'State'=>$_SOAddressValidateTypeValidateAddress->getState(),'PostalCode'=>$_SOAddressValidateTypeValidateAddress->getPostalCode(),'LicenseKey'=>$_SOAddressValidateTypeValidateAddress->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateAddressWithFragments
	 * Meta informations :
	 * 	- documentation : Returns corrected address information and street address fragments for a given US postal address.
	 * @uses SOAddressValidateWsdlClass::getSoapClient()
	 * @uses SOAddressValidateWsdlClass::setResult()
	 * @uses SOAddressValidateWsdlClass::getResult()
	 * @uses SOAddressValidateWsdlClass::saveLastError()
	 * @uses SOAddressValidateTypeValidateAddressWithFragments::getAddress()
	 * @uses SOAddressValidateTypeValidateAddressWithFragments::getCity()
	 * @uses SOAddressValidateTypeValidateAddressWithFragments::getState()
	 * @uses SOAddressValidateTypeValidateAddressWithFragments::getPostalCode()
	 * @uses SOAddressValidateTypeValidateAddressWithFragments::getLicenseKey()
	 * @param SOAddressValidateTypeValidateAddressWithFragments ValidateAddressWithFragments
	 * @return SOAddressValidateTypeValidateAddressWithFragmentsResponse
	 */
	public function ValidateAddressWithFragments(SOAddressValidateTypeValidateAddressWithFragments $_SOAddressValidateTypeValidateAddressWithFragments)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateAddressWithFragments(array('Address'=>$_SOAddressValidateTypeValidateAddressWithFragments->getAddress(),'City'=>$_SOAddressValidateTypeValidateAddressWithFragments->getCity(),'State'=>$_SOAddressValidateTypeValidateAddressWithFragments->getState(),'PostalCode'=>$_SOAddressValidateTypeValidateAddressWithFragments->getPostalCode(),'LicenseKey'=>$_SOAddressValidateTypeValidateAddressWithFragments->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateAddressWithExtras
	 * Meta informations :
	 * 	- documentation : Returns corrected address information for a given US postal address.
	 * @uses SOAddressValidateWsdlClass::getSoapClient()
	 * @uses SOAddressValidateWsdlClass::setResult()
	 * @uses SOAddressValidateWsdlClass::getResult()
	 * @uses SOAddressValidateWsdlClass::saveLastError()
	 * @uses SOAddressValidateTypeValidateAddressWithExtras::getAddress()
	 * @uses SOAddressValidateTypeValidateAddressWithExtras::getAddress2()
	 * @uses SOAddressValidateTypeValidateAddressWithExtras::getCity()
	 * @uses SOAddressValidateTypeValidateAddressWithExtras::getState()
	 * @uses SOAddressValidateTypeValidateAddressWithExtras::getPostalCode()
	 * @uses SOAddressValidateTypeValidateAddressWithExtras::getLicenseKey()
	 * @param SOAddressValidateTypeValidateAddressWithExtras ValidateAddressWithExtras
	 * @return SOAddressValidateTypeValidateAddressWithExtrasResponse
	 */
	public function ValidateAddressWithExtras(SOAddressValidateTypeValidateAddressWithExtras $_SOAddressValidateTypeValidateAddressWithExtras)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateAddressWithExtras(array('Address'=>$_SOAddressValidateTypeValidateAddressWithExtras->getAddress(),'Address2'=>$_SOAddressValidateTypeValidateAddressWithExtras->getAddress2(),'City'=>$_SOAddressValidateTypeValidateAddressWithExtras->getCity(),'State'=>$_SOAddressValidateTypeValidateAddressWithExtras->getState(),'PostalCode'=>$_SOAddressValidateTypeValidateAddressWithExtras->getPostalCode(),'LicenseKey'=>$_SOAddressValidateTypeValidateAddressWithExtras->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateAddressType
	 * Meta informations :
	 * 	- documentation : Returns the type of address for a given US postal address.
	 * @uses SOAddressValidateWsdlClass::getSoapClient()
	 * @uses SOAddressValidateWsdlClass::setResult()
	 * @uses SOAddressValidateWsdlClass::getResult()
	 * @uses SOAddressValidateWsdlClass::saveLastError()
	 * @uses SOAddressValidateTypeValidateAddressType::getAddress()
	 * @uses SOAddressValidateTypeValidateAddressType::getAddress2()
	 * @uses SOAddressValidateTypeValidateAddressType::getCity()
	 * @uses SOAddressValidateTypeValidateAddressType::getState()
	 * @uses SOAddressValidateTypeValidateAddressType::getPostalCode()
	 * @uses SOAddressValidateTypeValidateAddressType::getLicenseKey()
	 * @param SOAddressValidateTypeValidateAddressType ValidateAddressType
	 * @return SOAddressValidateTypeValidateAddressTypeResponse
	 */
	public function ValidateAddressType(SOAddressValidateTypeValidateAddressType $_SOAddressValidateTypeValidateAddressType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateAddressType(array('Address'=>$_SOAddressValidateTypeValidateAddressType->getAddress(),'Address2'=>$_SOAddressValidateTypeValidateAddressType->getAddress2(),'City'=>$_SOAddressValidateTypeValidateAddressType->getCity(),'State'=>$_SOAddressValidateTypeValidateAddressType->getState(),'PostalCode'=>$_SOAddressValidateTypeValidateAddressType->getPostalCode(),'LicenseKey'=>$_SOAddressValidateTypeValidateAddressType->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateAddressSingleLine
	 * Meta informations :
	 * 	- documentation : Returns parsed and validated address elements for an address on a single line.
	 * @uses SOAddressValidateWsdlClass::getSoapClient()
	 * @uses SOAddressValidateWsdlClass::setResult()
	 * @uses SOAddressValidateWsdlClass::getResult()
	 * @uses SOAddressValidateWsdlClass::saveLastError()
	 * @uses SOAddressValidateTypeValidateAddressSingleLine::getAddress()
	 * @uses SOAddressValidateTypeValidateAddressSingleLine::getLicenseKey()
	 * @param SOAddressValidateTypeValidateAddressSingleLine ValidateAddressSingleLine
	 * @return SOAddressValidateTypeValidateAddressSingleLineResponse
	 */
	public function ValidateAddressSingleLine(SOAddressValidateTypeValidateAddressSingleLine $_SOAddressValidateTypeValidateAddressSingleLine)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateAddressSingleLine(array('Address'=>$_SOAddressValidateTypeValidateAddressSingleLine->getAddress(),'LicenseKey'=>$_SOAddressValidateTypeValidateAddressSingleLine->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateCityStateZip
	 * Meta informations :
	 * 	- documentation : Returns corrected address information for a given US city, state, and/or postal code.
	 * @uses SOAddressValidateWsdlClass::getSoapClient()
	 * @uses SOAddressValidateWsdlClass::setResult()
	 * @uses SOAddressValidateWsdlClass::getResult()
	 * @uses SOAddressValidateWsdlClass::saveLastError()
	 * @uses SOAddressValidateTypeValidateCityStateZip::getCity()
	 * @uses SOAddressValidateTypeValidateCityStateZip::getState()
	 * @uses SOAddressValidateTypeValidateCityStateZip::getPostalCode()
	 * @uses SOAddressValidateTypeValidateCityStateZip::getLicenseKey()
	 * @param SOAddressValidateTypeValidateCityStateZip ValidateCityStateZip
	 * @return SOAddressValidateTypeValidateCityStateZipResponse
	 */
	public function ValidateCityStateZip(SOAddressValidateTypeValidateCityStateZip $_SOAddressValidateTypeValidateCityStateZip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateCityStateZip(array('City'=>$_SOAddressValidateTypeValidateCityStateZip->getCity(),'State'=>$_SOAddressValidateTypeValidateCityStateZip->getState(),'PostalCode'=>$_SOAddressValidateTypeValidateCityStateZip->getPostalCode(),'LicenseKey'=>$_SOAddressValidateTypeValidateCityStateZip->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateAddressWithDPV
	 * Meta informations :
	 * 	- documentation : Returns parsed and validated address elements including Delivery Point Validation.
	 * @uses SOAddressValidateWsdlClass::getSoapClient()
	 * @uses SOAddressValidateWsdlClass::setResult()
	 * @uses SOAddressValidateWsdlClass::getResult()
	 * @uses SOAddressValidateWsdlClass::saveLastError()
	 * @uses SOAddressValidateTypeValidateAddressWithDPV::getAddress()
	 * @uses SOAddressValidateTypeValidateAddressWithDPV::getAddress2()
	 * @uses SOAddressValidateTypeValidateAddressWithDPV::getCity()
	 * @uses SOAddressValidateTypeValidateAddressWithDPV::getState()
	 * @uses SOAddressValidateTypeValidateAddressWithDPV::getPostalCode()
	 * @uses SOAddressValidateTypeValidateAddressWithDPV::getLicenseKey()
	 * @param SOAddressValidateTypeValidateAddressWithDPV ValidateAddressWithDPV
	 * @return SOAddressValidateTypeValidateAddressWithDPVResponse
	 */
	public function ValidateAddressWithDPV(SOAddressValidateTypeValidateAddressWithDPV $_SOAddressValidateTypeValidateAddressWithDPV)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateAddressWithDPV(array('Address'=>$_SOAddressValidateTypeValidateAddressWithDPV->getAddress(),'Address2'=>$_SOAddressValidateTypeValidateAddressWithDPV->getAddress2(),'City'=>$_SOAddressValidateTypeValidateAddressWithDPV->getCity(),'State'=>$_SOAddressValidateTypeValidateAddressWithDPV->getState(),'PostalCode'=>$_SOAddressValidateTypeValidateAddressWithDPV->getPostalCode(),'LicenseKey'=>$_SOAddressValidateTypeValidateAddressWithDPV->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateAddressWithSuiteLink
	 * Meta informations :
	 * 	- documentation : Returns parsed and validated address elements including any SuiteLink corrections and Delivery Point Validation (DPV) flags.
	 * @uses SOAddressValidateWsdlClass::getSoapClient()
	 * @uses SOAddressValidateWsdlClass::setResult()
	 * @uses SOAddressValidateWsdlClass::getResult()
	 * @uses SOAddressValidateWsdlClass::saveLastError()
	 * @uses SOAddressValidateTypeValidateAddressWithSuiteLink::getBusinessName()
	 * @uses SOAddressValidateTypeValidateAddressWithSuiteLink::getAddress()
	 * @uses SOAddressValidateTypeValidateAddressWithSuiteLink::getAddress2()
	 * @uses SOAddressValidateTypeValidateAddressWithSuiteLink::getCity()
	 * @uses SOAddressValidateTypeValidateAddressWithSuiteLink::getState()
	 * @uses SOAddressValidateTypeValidateAddressWithSuiteLink::getPostalCode()
	 * @uses SOAddressValidateTypeValidateAddressWithSuiteLink::getLicenseKey()
	 * @param SOAddressValidateTypeValidateAddressWithSuiteLink ValidateAddressWithSuiteLink
	 * @return SOAddressValidateTypeValidateAddressWithSuiteLinkResponse
	 */
	public function ValidateAddressWithSuiteLink(SOAddressValidateTypeValidateAddressWithSuiteLink $_SOAddressValidateTypeValidateAddressWithSuiteLink)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateAddressWithSuiteLink(array('BusinessName'=>$_SOAddressValidateTypeValidateAddressWithSuiteLink->getBusinessName(),'Address'=>$_SOAddressValidateTypeValidateAddressWithSuiteLink->getAddress(),'Address2'=>$_SOAddressValidateTypeValidateAddressWithSuiteLink->getAddress2(),'City'=>$_SOAddressValidateTypeValidateAddressWithSuiteLink->getCity(),'State'=>$_SOAddressValidateTypeValidateAddressWithSuiteLink->getState(),'PostalCode'=>$_SOAddressValidateTypeValidateAddressWithSuiteLink->getPostalCode(),'LicenseKey'=>$_SOAddressValidateTypeValidateAddressWithSuiteLink->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateAddressWithRDI
	 * Meta informations :
	 * 	- documentation : Returns parsed and validated address elements including DPV and RDI information. Available only by special agreement. Please contact the Service Objects sales department for details.
	 * @uses SOAddressValidateWsdlClass::getSoapClient()
	 * @uses SOAddressValidateWsdlClass::setResult()
	 * @uses SOAddressValidateWsdlClass::getResult()
	 * @uses SOAddressValidateWsdlClass::saveLastError()
	 * @uses SOAddressValidateTypeValidateAddressWithRDI::getAddress()
	 * @uses SOAddressValidateTypeValidateAddressWithRDI::getAddress2()
	 * @uses SOAddressValidateTypeValidateAddressWithRDI::getCity()
	 * @uses SOAddressValidateTypeValidateAddressWithRDI::getState()
	 * @uses SOAddressValidateTypeValidateAddressWithRDI::getPostalCode()
	 * @uses SOAddressValidateTypeValidateAddressWithRDI::getLicenseKey()
	 * @param SOAddressValidateTypeValidateAddressWithRDI ValidateAddressWithRDI
	 * @return SOAddressValidateTypeValidateAddressWithRDIResponse
	 */
	public function ValidateAddressWithRDI(SOAddressValidateTypeValidateAddressWithRDI $_SOAddressValidateTypeValidateAddressWithRDI)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateAddressWithRDI(array('Address'=>$_SOAddressValidateTypeValidateAddressWithRDI->getAddress(),'Address2'=>$_SOAddressValidateTypeValidateAddressWithRDI->getAddress2(),'City'=>$_SOAddressValidateTypeValidateAddressWithRDI->getCity(),'State'=>$_SOAddressValidateTypeValidateAddressWithRDI->getState(),'PostalCode'=>$_SOAddressValidateTypeValidateAddressWithRDI->getPostalCode(),'LicenseKey'=>$_SOAddressValidateTypeValidateAddressWithRDI->getLicenseKey())));
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
	 * @return SOAddressValidateTypeValidateAddressWithRDIResponse
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