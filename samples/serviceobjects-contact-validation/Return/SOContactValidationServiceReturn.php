<?php
/**
 * Class file for SOContactValidationServiceReturn
 * @date 08/07/2012
 */
/**
 * Class SOContactValidationServiceReturn
 * @date 08/07/2012
 */
class SOContactValidationServiceReturn extends SOContactValidationWsdlClass
{
	/**
	 * Method to call ReturnAllOutcomes
	 * Meta informations :
	 * 	- documentation : Returns a list of possible outcomes with their codes and descriptions.
	 * @uses SOContactValidationWsdlClass::getSoapClient()
	 * @uses SOContactValidationWsdlClass::setResult()
	 * @uses SOContactValidationWsdlClass::getResult()
	 * @uses SOContactValidationWsdlClass::saveLastError()
	 * @uses SOContactValidationTypeReturnAllOutcomes::getLicenseKey()
	 * @param SOContactValidationTypeReturnAllOutcomes ReturnAllOutcomes
	 * @return SOContactValidationTypeReturnAllOutcomesResponse
	 */
	public function ReturnAllOutcomes(SOContactValidationTypeReturnAllOutcomes $_SOContactValidationTypeReturnAllOutcomes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReturnAllOutcomes(array('LicenseKey'=>$_SOContactValidationTypeReturnAllOutcomes->getLicenseKey())));
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
	 * @return SOContactValidationTypeReturnAllOutcomesResponse
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