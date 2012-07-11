<?php
/**
 * Class file for SOFraudProtectionServiceReturn
 * @date 08/07/2012
 */
/**
 * Class SOFraudProtectionServiceReturn
 * @date 08/07/2012
 */
class SOFraudProtectionServiceReturn extends SOFraudProtectionWsdlClass
{
	/**
	 * Method to call ReturnOutcomes
	 * Meta informations :
	 * 	- documentation : Returns a list of possible outcomes with their codes, descriptions and scores.
	 * @uses SOFraudProtectionWsdlClass::getSoapClient()
	 * @uses SOFraudProtectionWsdlClass::setResult()
	 * @uses SOFraudProtectionWsdlClass::getResult()
	 * @uses SOFraudProtectionWsdlClass::saveLastError()
	 * @uses SOFraudProtectionTypeReturnOutcomes::getLicenseKey()
	 * @param SOFraudProtectionTypeReturnOutcomes ReturnOutcomes
	 * @return SOFraudProtectionTypeReturnOutcomesResponse
	 */
	public function ReturnOutcomes(SOFraudProtectionTypeReturnOutcomes $_SOFraudProtectionTypeReturnOutcomes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReturnOutcomes(array('LicenseKey'=>$_SOFraudProtectionTypeReturnOutcomes->getLicenseKey())));
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
	 * @return SOFraudProtectionTypeReturnOutcomesResponse
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