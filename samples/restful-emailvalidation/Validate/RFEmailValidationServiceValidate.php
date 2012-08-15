<?php
/**
 * Class file for RFEmailValidationServiceValidate
 * @date 15/08/2012
 */
/**
 * Class RFEmailValidationServiceValidate
 * @date 15/08/2012
 */
class RFEmailValidationServiceValidate extends RFEmailValidationWsdlClass
{
	/**
	 * Method to call Validate
	 * @uses RFEmailValidationWsdlClass::getSoapClient()
	 * @uses RFEmailValidationWsdlClass::setResult()
	 * @uses RFEmailValidationWsdlClass::getResult()
	 * @uses RFEmailValidationWsdlClass::saveLastError()
	 * @uses RFEmailValidationTypeValidate::getRequest()
	 * @param RFEmailValidationTypeValidate Validate
	 * @return RFEmailValidationTypeValidateResponse
	 */
	public function Validate(RFEmailValidationTypeValidate $_RFEmailValidationTypeValidate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Validate(array('request'=>$_RFEmailValidationTypeValidate->getRequest())));
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
	 * @return RFEmailValidationTypeValidateResponse
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