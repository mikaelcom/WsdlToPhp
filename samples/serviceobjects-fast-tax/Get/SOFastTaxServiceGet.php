<?php
/**
 * Class file for SOFastTaxServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxServiceGet
 * @date 08/07/2012
 */
class SOFastTaxServiceGet extends SOFastTaxWsdlClass
{
	/**
	 * Method to call GetTaxInfo
	 * Meta informations :
	 * 	- documentation : Returns tax information for a given tax type and 5-digit zip code. Possible tax types are 'Sales' and 'Use'.
	 * @uses SOFastTaxWsdlClass::getSoapClient()
	 * @uses SOFastTaxWsdlClass::setResult()
	 * @uses SOFastTaxWsdlClass::getResult()
	 * @uses SOFastTaxWsdlClass::saveLastError()
	 * @uses SOFastTaxTypeGetTaxInfo::getPostalCode()
	 * @uses SOFastTaxTypeGetTaxInfo::getTaxType()
	 * @uses SOFastTaxTypeGetTaxInfo::getLicenseKey()
	 * @param SOFastTaxTypeGetTaxInfo GetTaxInfo
	 * @return SOFastTaxTypeGetTaxInfoResponse
	 */
	public function GetTaxInfo(SOFastTaxTypeGetTaxInfo $_SOFastTaxTypeGetTaxInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTaxInfo(array('PostalCode'=>$_SOFastTaxTypeGetTaxInfo->getPostalCode(),'TaxType'=>$_SOFastTaxTypeGetTaxInfo->getTaxType(),'LicenseKey'=>$_SOFastTaxTypeGetTaxInfo->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTaxInfoByCityCountyState
	 * Meta informations :
	 * 	- documentation : Returns tax information for a given tax type, city, county, state. Possible tax types are 'Sales' and 'Use'.
	 * @uses SOFastTaxWsdlClass::getSoapClient()
	 * @uses SOFastTaxWsdlClass::setResult()
	 * @uses SOFastTaxWsdlClass::getResult()
	 * @uses SOFastTaxWsdlClass::saveLastError()
	 * @uses SOFastTaxTypeGetTaxInfoByCityCountyState::getCity()
	 * @uses SOFastTaxTypeGetTaxInfoByCityCountyState::getCounty()
	 * @uses SOFastTaxTypeGetTaxInfoByCityCountyState::getState()
	 * @uses SOFastTaxTypeGetTaxInfoByCityCountyState::getTaxType()
	 * @uses SOFastTaxTypeGetTaxInfoByCityCountyState::getLicenseKey()
	 * @param SOFastTaxTypeGetTaxInfoByCityCountyState GetTaxInfoByCityCountyState
	 * @return SOFastTaxTypeGetTaxInfoByCityCountyStateResponse
	 */
	public function GetTaxInfoByCityCountyState(SOFastTaxTypeGetTaxInfoByCityCountyState $_SOFastTaxTypeGetTaxInfoByCityCountyState)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTaxInfoByCityCountyState(array('City'=>$_SOFastTaxTypeGetTaxInfoByCityCountyState->getCity(),'County'=>$_SOFastTaxTypeGetTaxInfoByCityCountyState->getCounty(),'State'=>$_SOFastTaxTypeGetTaxInfoByCityCountyState->getState(),'TaxType'=>$_SOFastTaxTypeGetTaxInfoByCityCountyState->getTaxType(),'LicenseKey'=>$_SOFastTaxTypeGetTaxInfoByCityCountyState->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTaxInfoByAddress
	 * Meta informations :
	 * 	- documentation : Returns tax information for a given tax type and street address. Possible tax types are 'Sales' and 'Use'.
	 * @uses SOFastTaxWsdlClass::getSoapClient()
	 * @uses SOFastTaxWsdlClass::setResult()
	 * @uses SOFastTaxWsdlClass::getResult()
	 * @uses SOFastTaxWsdlClass::saveLastError()
	 * @uses SOFastTaxTypeGetTaxInfoByAddress::getAddress()
	 * @uses SOFastTaxTypeGetTaxInfoByAddress::getCity()
	 * @uses SOFastTaxTypeGetTaxInfoByAddress::getState()
	 * @uses SOFastTaxTypeGetTaxInfoByAddress::getZipCode()
	 * @uses SOFastTaxTypeGetTaxInfoByAddress::getTaxType()
	 * @uses SOFastTaxTypeGetTaxInfoByAddress::getLicenseKey()
	 * @param SOFastTaxTypeGetTaxInfoByAddress GetTaxInfoByAddress
	 * @return SOFastTaxTypeGetTaxInfoByAddressResponse
	 */
	public function GetTaxInfoByAddress(SOFastTaxTypeGetTaxInfoByAddress $_SOFastTaxTypeGetTaxInfoByAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTaxInfoByAddress(array('Address'=>$_SOFastTaxTypeGetTaxInfoByAddress->getAddress(),'City'=>$_SOFastTaxTypeGetTaxInfoByAddress->getCity(),'State'=>$_SOFastTaxTypeGetTaxInfoByAddress->getState(),'ZipCode'=>$_SOFastTaxTypeGetTaxInfoByAddress->getZipCode(),'TaxType'=>$_SOFastTaxTypeGetTaxInfoByAddress->getTaxType(),'LicenseKey'=>$_SOFastTaxTypeGetTaxInfoByAddress->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCanadianTaxInfoByProvince
	 * Meta informations :
	 * 	- documentation : Returns Canadian tax information. By Province only.
	 * @uses SOFastTaxWsdlClass::getSoapClient()
	 * @uses SOFastTaxWsdlClass::setResult()
	 * @uses SOFastTaxWsdlClass::getResult()
	 * @uses SOFastTaxWsdlClass::saveLastError()
	 * @uses SOFastTaxTypeGetCanadianTaxInfoByProvince::getProvince()
	 * @uses SOFastTaxTypeGetCanadianTaxInfoByProvince::getLicenseKey()
	 * @param SOFastTaxTypeGetCanadianTaxInfoByProvince GetCanadianTaxInfoByProvince
	 * @return SOFastTaxTypeGetCanadianTaxInfoByProvinceResponse
	 */
	public function GetCanadianTaxInfoByProvince(SOFastTaxTypeGetCanadianTaxInfoByProvince $_SOFastTaxTypeGetCanadianTaxInfoByProvince)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCanadianTaxInfoByProvince(array('Province'=>$_SOFastTaxTypeGetCanadianTaxInfoByProvince->getProvince(),'LicenseKey'=>$_SOFastTaxTypeGetCanadianTaxInfoByProvince->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTaxInfoByCityState
	 * Meta informations :
	 * 	- documentation : Returns tax information for a given tax type and City/State. Possible tax types are 'Sales' and 'Use'.
	 * @uses SOFastTaxWsdlClass::getSoapClient()
	 * @uses SOFastTaxWsdlClass::setResult()
	 * @uses SOFastTaxWsdlClass::getResult()
	 * @uses SOFastTaxWsdlClass::saveLastError()
	 * @uses SOFastTaxTypeGetTaxInfoByCityState::getCity()
	 * @uses SOFastTaxTypeGetTaxInfoByCityState::getState()
	 * @uses SOFastTaxTypeGetTaxInfoByCityState::getTaxType()
	 * @uses SOFastTaxTypeGetTaxInfoByCityState::getLicenseKey()
	 * @param SOFastTaxTypeGetTaxInfoByCityState GetTaxInfoByCityState
	 * @return SOFastTaxTypeGetTaxInfoByCityStateResponse
	 */
	public function GetTaxInfoByCityState(SOFastTaxTypeGetTaxInfoByCityState $_SOFastTaxTypeGetTaxInfoByCityState)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTaxInfoByCityState(array('City'=>$_SOFastTaxTypeGetTaxInfoByCityState->getCity(),'State'=>$_SOFastTaxTypeGetTaxInfoByCityState->getState(),'TaxType'=>$_SOFastTaxTypeGetTaxInfoByCityState->getTaxType(),'LicenseKey'=>$_SOFastTaxTypeGetTaxInfoByCityState->getLicenseKey())));
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
	 * @return SOFastTaxTypeGetTaxInfoByCityStateResponse
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