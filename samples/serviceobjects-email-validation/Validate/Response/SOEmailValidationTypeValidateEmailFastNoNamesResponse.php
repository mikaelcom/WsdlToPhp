<?php
/**
 * Class file for SOEmailValidationTypeValidateEmailFastNoNamesResponse
 * @date 08/07/2012
 */
/**
 * Class SOEmailValidationTypeValidateEmailFastNoNamesResponse
 * @date 08/07/2012
 */
class SOEmailValidationTypeValidateEmailFastNoNamesResponse extends SOEmailValidationWsdlClass
{
	/**
	 * The ValidateEmailFastNoNamesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOEmailValidationTypeEmailValidateResult
	 */
	public $ValidateEmailFastNoNamesResult;
	/**
	 * Constructor
	 * @param SOEmailValidationTypeEmailValidateResult ValidateEmailFastNoNamesResult
	 * @return SOEmailValidationTypeValidateEmailFastNoNamesResponse
	 */
	public function __construct($_ValidateEmailFastNoNamesResult = null)
	{
		parent::__construct(array('ValidateEmailFastNoNamesResult'=>$_ValidateEmailFastNoNamesResult));
	}
	/**
	 * Set ValidateEmailFastNoNamesResult
	 * @param EmailValidateResult ValidateEmailFastNoNamesResult
	 * @return EmailValidateResult
	 */
	public function setValidateEmailFastNoNamesResult($_ValidateEmailFastNoNamesResult)
	{
		return ($this->ValidateEmailFastNoNamesResult = $_ValidateEmailFastNoNamesResult);
	}
	/**
	 * Get ValidateEmailFastNoNamesResult
	 * @return SOEmailValidationTypeEmailValidateResult
	 */
	public function getValidateEmailFastNoNamesResult()
	{
		return $this->ValidateEmailFastNoNamesResult;
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