<?php
/**
 * Class file for SODemographicsPlusServiceGet
 * @date 06/07/2012
 */
/**
 * Class SODemographicsPlusServiceGet
 * @date 06/07/2012
 */
class SODemographicsPlusServiceGet extends SODemographicsPlusWsdlClass
{
	/**
	 * Method to call GetDemographicsByAddress
	 * Meta informations :
	 * 	- documentation : Returns demographic information for a given US street address.
	 * @uses SODemographicsPlusWsdlClass::getSoapClient()
	 * @uses SODemographicsPlusWsdlClass::setResult()
	 * @uses SODemographicsPlusWsdlClass::getResult()
	 * @uses SODemographicsPlusWsdlClass::saveLastError()
	 * @uses SODemographicsPlusTypeGetDemographicsByAddress::getAddress()
	 * @uses SODemographicsPlusTypeGetDemographicsByAddress::getCity()
	 * @uses SODemographicsPlusTypeGetDemographicsByAddress::getState()
	 * @uses SODemographicsPlusTypeGetDemographicsByAddress::getPostalCode()
	 * @uses SODemographicsPlusTypeGetDemographicsByAddress::getLicenseKey()
	 * @param SODemographicsPlusTypeGetDemographicsByAddress GetDemographicsByAddress
	 * @return SODemographicsPlusTypeGetDemographicsByAddressResponse
	 */
	public function GetDemographicsByAddress(SODemographicsPlusTypeGetDemographicsByAddress $_SODemographicsPlusTypeGetDemographicsByAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDemographicsByAddress(array('Address'=>$_SODemographicsPlusTypeGetDemographicsByAddress->getAddress(),'City'=>$_SODemographicsPlusTypeGetDemographicsByAddress->getCity(),'State'=>$_SODemographicsPlusTypeGetDemographicsByAddress->getState(),'PostalCode'=>$_SODemographicsPlusTypeGetDemographicsByAddress->getPostalCode(),'LicenseKey'=>$_SODemographicsPlusTypeGetDemographicsByAddress->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDemographicsByZIP
	 * Meta informations :
	 * 	- documentation : Returns demographic information for a given US ZIP code.
	 * @uses SODemographicsPlusWsdlClass::getSoapClient()
	 * @uses SODemographicsPlusWsdlClass::setResult()
	 * @uses SODemographicsPlusWsdlClass::getResult()
	 * @uses SODemographicsPlusWsdlClass::saveLastError()
	 * @uses SODemographicsPlusTypeGetDemographicsByZIP::getPostalCode()
	 * @uses SODemographicsPlusTypeGetDemographicsByZIP::getLicenseKey()
	 * @param SODemographicsPlusTypeGetDemographicsByZIP GetDemographicsByZIP
	 * @return SODemographicsPlusTypeGetDemographicsByZIPResponse
	 */
	public function GetDemographicsByZIP(SODemographicsPlusTypeGetDemographicsByZIP $_SODemographicsPlusTypeGetDemographicsByZIP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDemographicsByZIP(array('PostalCode'=>$_SODemographicsPlusTypeGetDemographicsByZIP->getPostalCode(),'LicenseKey'=>$_SODemographicsPlusTypeGetDemographicsByZIP->getLicenseKey())));
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
	 * @return SODemographicsPlusTypeGetDemographicsByZIPResponse
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