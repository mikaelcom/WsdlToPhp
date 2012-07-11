<?php
/**
 * Class file for SOFraudProtectionTypeValidateFormAllOptionalResponse
 * @date 08/07/2012
 */
/**
 * Class SOFraudProtectionTypeValidateFormAllOptionalResponse
 * @date 08/07/2012
 */
class SOFraudProtectionTypeValidateFormAllOptionalResponse extends SOFraudProtectionWsdlClass
{
	/**
	 * The ValidateFormAllOptionalResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFraudProtectionTypeValidation
	 */
	public $ValidateFormAllOptionalResult;
	/**
	 * Constructor
	 * @param SOFraudProtectionTypeValidation ValidateFormAllOptionalResult
	 * @return SOFraudProtectionTypeValidateFormAllOptionalResponse
	 */
	public function __construct($_ValidateFormAllOptionalResult = null)
	{
		parent::__construct(array('ValidateFormAllOptionalResult'=>$_ValidateFormAllOptionalResult));
	}
	/**
	 * Set ValidateFormAllOptionalResult
	 * @param Validation ValidateFormAllOptionalResult
	 * @return Validation
	 */
	public function setValidateFormAllOptionalResult($_ValidateFormAllOptionalResult)
	{
		return ($this->ValidateFormAllOptionalResult = $_ValidateFormAllOptionalResult);
	}
	/**
	 * Get ValidateFormAllOptionalResult
	 * @return SOFraudProtectionTypeValidation
	 */
	public function getValidateFormAllOptionalResult()
	{
		return $this->ValidateFormAllOptionalResult;
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