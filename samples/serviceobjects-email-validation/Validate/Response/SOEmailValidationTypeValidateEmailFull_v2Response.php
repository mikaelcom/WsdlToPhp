<?php
/**
 * Class file for SOEmailValidationTypeValidateEmailFull_v2Response
 * @date 08/07/2012
 */
/**
 * Class SOEmailValidationTypeValidateEmailFull_v2Response
 * @date 08/07/2012
 */
class SOEmailValidationTypeValidateEmailFull_v2Response extends SOEmailValidationWsdlClass
{
	/**
	 * The ValidateEmailFull_v2Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOEmailValidationTypeEmailValidateResult_v2
	 */
	public $ValidateEmailFull_v2Result;
	/**
	 * Constructor
	 * @param SOEmailValidationTypeEmailValidateResult_v2 ValidateEmailFull_v2Result
	 * @return SOEmailValidationTypeValidateEmailFull_v2Response
	 */
	public function __construct($_ValidateEmailFull_v2Result = null)
	{
		parent::__construct(array('ValidateEmailFull_v2Result'=>$_ValidateEmailFull_v2Result));
	}
	/**
	 * Set ValidateEmailFull_v2Result
	 * @param EmailValidateResult_v2 ValidateEmailFull_v2Result
	 * @return EmailValidateResult_v2
	 */
	public function setValidateEmailFull_v2Result($_ValidateEmailFull_v2Result)
	{
		return ($this->ValidateEmailFull_v2Result = $_ValidateEmailFull_v2Result);
	}
	/**
	 * Get ValidateEmailFull_v2Result
	 * @return SOEmailValidationTypeEmailValidateResult_v2
	 */
	public function getValidateEmailFull_v2Result()
	{
		return $this->ValidateEmailFull_v2Result;
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