<?php
/**
 * Class file for SOBinValidationServiceValidate
 * @date 08/07/2012
 */
/**
 * Class SOBinValidationServiceValidate
 * @date 08/07/2012
 */
class SOBinValidationServiceValidate extends SOBinValidationWsdlClass
{
	/**
	 * Method to call ValidateBIN
	 * Meta informations :
	 * 	- documentation : Returns Bank Information for the given BIN number.
	 * @uses SOBinValidationWsdlClass::getSoapClient()
	 * @uses SOBinValidationWsdlClass::setResult()
	 * @uses SOBinValidationWsdlClass::getResult()
	 * @uses SOBinValidationWsdlClass::saveLastError()
	 * @uses SOBinValidationTypeValidateBIN::getBinNumber()
	 * @uses SOBinValidationTypeValidateBIN::getLicenseKey()
	 * @param SOBinValidationTypeValidateBIN ValidateBIN
	 * @return SOBinValidationTypeValidateBINResponse
	 */
	public function ValidateBIN(SOBinValidationTypeValidateBIN $_SOBinValidationTypeValidateBIN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateBIN(array('BinNumber'=>$_SOBinValidationTypeValidateBIN->getBinNumber(),'LicenseKey'=>$_SOBinValidationTypeValidateBIN->getLicenseKey())));
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
	 * @return SOBinValidationTypeValidateBINResponse
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