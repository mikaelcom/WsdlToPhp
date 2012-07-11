<?php
/**
 * Class file for SOGeoCensusServiceGet
 * @date 06/07/2012
 */
/**
 * Class SOGeoCensusServiceGet
 * @date 06/07/2012
 */
class SOGeoCensusServiceGet extends SOGeoCensusWsdlClass
{
	/**
	 * Method to call GetLocalAreaProfileByZip
	 * Meta informations :
	 * 	- documentation : Returns local area profile within a given zip code.
	 * @uses SOGeoCensusWsdlClass::getSoapClient()
	 * @uses SOGeoCensusWsdlClass::setResult()
	 * @uses SOGeoCensusWsdlClass::getResult()
	 * @uses SOGeoCensusWsdlClass::saveLastError()
	 * @uses SOGeoCensusTypeGetLocalAreaProfileByZip::getPostalCode()
	 * @uses SOGeoCensusTypeGetLocalAreaProfileByZip::getLicenseKey()
	 * @param SOGeoCensusTypeGetLocalAreaProfileByZip GetLocalAreaProfileByZip
	 * @return SOGeoCensusTypeGetLocalAreaProfileByZipResponse
	 */
	public function GetLocalAreaProfileByZip(SOGeoCensusTypeGetLocalAreaProfileByZip $_SOGeoCensusTypeGetLocalAreaProfileByZip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLocalAreaProfileByZip(array('PostalCode'=>$_SOGeoCensusTypeGetLocalAreaProfileByZip->getPostalCode(),'LicenseKey'=>$_SOGeoCensusTypeGetLocalAreaProfileByZip->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLocalAreaIncomeByZip
	 * Meta informations :
	 * 	- documentation : Returns local area income profile within a given zip code.
	 * @uses SOGeoCensusWsdlClass::getSoapClient()
	 * @uses SOGeoCensusWsdlClass::setResult()
	 * @uses SOGeoCensusWsdlClass::getResult()
	 * @uses SOGeoCensusWsdlClass::saveLastError()
	 * @uses SOGeoCensusTypeGetLocalAreaIncomeByZip::getPostalCode()
	 * @uses SOGeoCensusTypeGetLocalAreaIncomeByZip::getLicenseKey()
	 * @param SOGeoCensusTypeGetLocalAreaIncomeByZip GetLocalAreaIncomeByZip
	 * @return SOGeoCensusTypeGetLocalAreaIncomeByZipResponse
	 */
	public function GetLocalAreaIncomeByZip(SOGeoCensusTypeGetLocalAreaIncomeByZip $_SOGeoCensusTypeGetLocalAreaIncomeByZip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLocalAreaIncomeByZip(array('PostalCode'=>$_SOGeoCensusTypeGetLocalAreaIncomeByZip->getPostalCode(),'LicenseKey'=>$_SOGeoCensusTypeGetLocalAreaIncomeByZip->getLicenseKey())));
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
	 * @return SOGeoCensusTypeGetLocalAreaIncomeByZipResponse
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