<?php
/**
 * Class file for SOEmailValidationTypeValidateEmailFullResponse
 * @date 08/07/2012
 */
/**
 * Class SOEmailValidationTypeValidateEmailFullResponse
 * @date 08/07/2012
 */
class SOEmailValidationTypeValidateEmailFullResponse extends SOEmailValidationWsdlClass
{
	/**
	 * The ValidateEmailFullResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOEmailValidationTypeEmailValidateResult
	 */
	public $ValidateEmailFullResult;
	/**
	 * Constructor
	 * @param SOEmailValidationTypeEmailValidateResult ValidateEmailFullResult
	 * @return SOEmailValidationTypeValidateEmailFullResponse
	 */
	public function __construct($_ValidateEmailFullResult = null)
	{
		parent::__construct(array('ValidateEmailFullResult'=>$_ValidateEmailFullResult));
	}
	/**
	 * Set ValidateEmailFullResult
	 * @param EmailValidateResult ValidateEmailFullResult
	 * @return EmailValidateResult
	 */
	public function setValidateEmailFullResult($_ValidateEmailFullResult)
	{
		return ($this->ValidateEmailFullResult = $_ValidateEmailFullResult);
	}
	/**
	 * Get ValidateEmailFullResult
	 * @return SOEmailValidationTypeEmailValidateResult
	 */
	public function getValidateEmailFullResult()
	{
		return $this->ValidateEmailFullResult;
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