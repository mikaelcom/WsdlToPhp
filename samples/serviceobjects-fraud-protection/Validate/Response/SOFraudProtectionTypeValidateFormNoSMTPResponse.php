<?php
/**
 * Class file for SOFraudProtectionTypeValidateFormNoSMTPResponse
 * @date 08/07/2012
 */
/**
 * Class SOFraudProtectionTypeValidateFormNoSMTPResponse
 * @date 08/07/2012
 */
class SOFraudProtectionTypeValidateFormNoSMTPResponse extends SOFraudProtectionWsdlClass
{
	/**
	 * The ValidateFormNoSMTPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFraudProtectionTypeValidation
	 */
	public $ValidateFormNoSMTPResult;
	/**
	 * Constructor
	 * @param SOFraudProtectionTypeValidation ValidateFormNoSMTPResult
	 * @return SOFraudProtectionTypeValidateFormNoSMTPResponse
	 */
	public function __construct($_ValidateFormNoSMTPResult = null)
	{
		parent::__construct(array('ValidateFormNoSMTPResult'=>$_ValidateFormNoSMTPResult));
	}
	/**
	 * Set ValidateFormNoSMTPResult
	 * @param Validation ValidateFormNoSMTPResult
	 * @return Validation
	 */
	public function setValidateFormNoSMTPResult($_ValidateFormNoSMTPResult)
	{
		return ($this->ValidateFormNoSMTPResult = $_ValidateFormNoSMTPResult);
	}
	/**
	 * Get ValidateFormNoSMTPResult
	 * @return SOFraudProtectionTypeValidation
	 */
	public function getValidateFormNoSMTPResult()
	{
		return $this->ValidateFormNoSMTPResult;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>