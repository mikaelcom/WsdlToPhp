<?php
/**
 * Class file for SOFraudProtectionTypeValidateFormResponse
 * @date 08/07/2012
 */
/**
 * Class SOFraudProtectionTypeValidateFormResponse
 * @date 08/07/2012
 */
class SOFraudProtectionTypeValidateFormResponse extends SOFraudProtectionWsdlClass
{
	/**
	 * The ValidateFormResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFraudProtectionTypeValidation
	 */
	public $ValidateFormResult;
	/**
	 * Constructor
	 * @param SOFraudProtectionTypeValidation ValidateFormResult
	 * @return SOFraudProtectionTypeValidateFormResponse
	 */
	public function __construct($_ValidateFormResult = null)
	{
		parent::__construct(array('ValidateFormResult'=>$_ValidateFormResult));
	}
	/**
	 * Set ValidateFormResult
	 * @param Validation ValidateFormResult
	 * @return Validation
	 */
	public function setValidateFormResult($_ValidateFormResult)
	{
		return ($this->ValidateFormResult = $_ValidateFormResult);
	}
	/**
	 * Get ValidateFormResult
	 * @return SOFraudProtectionTypeValidation
	 */
	public function getValidateFormResult()
	{
		return $this->ValidateFormResult;
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