<?php
/**
 * Class file for SOEmailValidationTypeValidateEmailFast_v2Response
 * @date 08/07/2012
 */
/**
 * Class SOEmailValidationTypeValidateEmailFast_v2Response
 * @date 08/07/2012
 */
class SOEmailValidationTypeValidateEmailFast_v2Response extends SOEmailValidationWsdlClass
{
	/**
	 * The ValidateEmailFast_v2Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOEmailValidationTypeEmailValidateResult_v2
	 */
	public $ValidateEmailFast_v2Result;
	/**
	 * Constructor
	 * @param SOEmailValidationTypeEmailValidateResult_v2 ValidateEmailFast_v2Result
	 * @return SOEmailValidationTypeValidateEmailFast_v2Response
	 */
	public function __construct($_ValidateEmailFast_v2Result = null)
	{
		parent::__construct(array('ValidateEmailFast_v2Result'=>$_ValidateEmailFast_v2Result));
	}
	/**
	 * Set ValidateEmailFast_v2Result
	 * @param EmailValidateResult_v2 ValidateEmailFast_v2Result
	 * @return EmailValidateResult_v2
	 */
	public function setValidateEmailFast_v2Result($_ValidateEmailFast_v2Result)
	{
		return ($this->ValidateEmailFast_v2Result = $_ValidateEmailFast_v2Result);
	}
	/**
	 * Get ValidateEmailFast_v2Result
	 * @return SOEmailValidationTypeEmailValidateResult_v2
	 */
	public function getValidateEmailFast_v2Result()
	{
		return $this->ValidateEmailFast_v2Result;
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