<?php
/**
 * Class file for SOFraudProtectionTypeValidateFormAllOptionalNoSMTPResponse
 * @date 08/07/2012
 */
/**
 * Class SOFraudProtectionTypeValidateFormAllOptionalNoSMTPResponse
 * @date 08/07/2012
 */
class SOFraudProtectionTypeValidateFormAllOptionalNoSMTPResponse extends SOFraudProtectionWsdlClass
{
	/**
	 * The ValidateFormAllOptionalNoSMTPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFraudProtectionTypeValidation
	 */
	public $ValidateFormAllOptionalNoSMTPResult;
	/**
	 * Constructor
	 * @param SOFraudProtectionTypeValidation ValidateFormAllOptionalNoSMTPResult
	 * @return SOFraudProtectionTypeValidateFormAllOptionalNoSMTPResponse
	 */
	public function __construct($_ValidateFormAllOptionalNoSMTPResult = null)
	{
		parent::__construct(array('ValidateFormAllOptionalNoSMTPResult'=>$_ValidateFormAllOptionalNoSMTPResult));
	}
	/**
	 * Set ValidateFormAllOptionalNoSMTPResult
	 * @param Validation ValidateFormAllOptionalNoSMTPResult
	 * @return Validation
	 */
	public function setValidateFormAllOptionalNoSMTPResult($_ValidateFormAllOptionalNoSMTPResult)
	{
		return ($this->ValidateFormAllOptionalNoSMTPResult = $_ValidateFormAllOptionalNoSMTPResult);
	}
	/**
	 * Get ValidateFormAllOptionalNoSMTPResult
	 * @return SOFraudProtectionTypeValidation
	 */
	public function getValidateFormAllOptionalNoSMTPResult()
	{
		return $this->ValidateFormAllOptionalNoSMTPResult;
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