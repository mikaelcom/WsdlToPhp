<?php
/**
 * Class file for SOEmailValidationTypeValidateEmailFastResponse
 * @date 08/07/2012
 */
/**
 * Class SOEmailValidationTypeValidateEmailFastResponse
 * @date 08/07/2012
 */
class SOEmailValidationTypeValidateEmailFastResponse extends SOEmailValidationWsdlClass
{
	/**
	 * The ValidateEmailFastResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOEmailValidationTypeEmailValidateResult
	 */
	public $ValidateEmailFastResult;
	/**
	 * Constructor
	 * @param SOEmailValidationTypeEmailValidateResult ValidateEmailFastResult
	 * @return SOEmailValidationTypeValidateEmailFastResponse
	 */
	public function __construct($_ValidateEmailFastResult = null)
	{
		parent::__construct(array('ValidateEmailFastResult'=>$_ValidateEmailFastResult));
	}
	/**
	 * Set ValidateEmailFastResult
	 * @param EmailValidateResult ValidateEmailFastResult
	 * @return EmailValidateResult
	 */
	public function setValidateEmailFastResult($_ValidateEmailFastResult)
	{
		return ($this->ValidateEmailFastResult = $_ValidateEmailFastResult);
	}
	/**
	 * Get ValidateEmailFastResult
	 * @return SOEmailValidationTypeEmailValidateResult
	 */
	public function getValidateEmailFastResult()
	{
		return $this->ValidateEmailFastResult;
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