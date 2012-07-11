<?php
/**
 * Class file for SOEmailValidationTypeValidateEmailFastNoNames_v2Response
 * @date 08/07/2012
 */
/**
 * Class SOEmailValidationTypeValidateEmailFastNoNames_v2Response
 * @date 08/07/2012
 */
class SOEmailValidationTypeValidateEmailFastNoNames_v2Response extends SOEmailValidationWsdlClass
{
	/**
	 * The ValidateEmailFastNoNames_v2Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOEmailValidationTypeEmailValidateResult_v2
	 */
	public $ValidateEmailFastNoNames_v2Result;
	/**
	 * Constructor
	 * @param SOEmailValidationTypeEmailValidateResult_v2 ValidateEmailFastNoNames_v2Result
	 * @return SOEmailValidationTypeValidateEmailFastNoNames_v2Response
	 */
	public function __construct($_ValidateEmailFastNoNames_v2Result = null)
	{
		parent::__construct(array('ValidateEmailFastNoNames_v2Result'=>$_ValidateEmailFastNoNames_v2Result));
	}
	/**
	 * Set ValidateEmailFastNoNames_v2Result
	 * @param EmailValidateResult_v2 ValidateEmailFastNoNames_v2Result
	 * @return EmailValidateResult_v2
	 */
	public function setValidateEmailFastNoNames_v2Result($_ValidateEmailFastNoNames_v2Result)
	{
		return ($this->ValidateEmailFastNoNames_v2Result = $_ValidateEmailFastNoNames_v2Result);
	}
	/**
	 * Get ValidateEmailFastNoNames_v2Result
	 * @return SOEmailValidationTypeEmailValidateResult_v2
	 */
	public function getValidateEmailFastNoNames_v2Result()
	{
		return $this->ValidateEmailFastNoNames_v2Result;
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