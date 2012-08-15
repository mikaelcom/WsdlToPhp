<?php
/**
 * Class file for RFEmailValidationTypeValidateResponse
 * @date 15/08/2012
 */
/**
 * Class RFEmailValidationTypeValidateResponse
 * @date 15/08/2012
 */
class RFEmailValidationTypeValidateResponse extends RFEmailValidationWsdlClass
{
	/**
	 * The ValidateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $ValidateResult;
	/**
	 * Constructor
	 * @param boolean ValidateResult
	 * @return RFEmailValidationTypeValidateResponse
	 */
	public function __construct($_ValidateResult = null)
	{
		parent::__construct(array('ValidateResult'=>$_ValidateResult));
	}
	/**
	 * Set ValidateResult
	 * @param boolean ValidateResult
	 * @return boolean
	 */
	public function setValidateResult($_ValidateResult)
	{
		return ($this->ValidateResult = $_ValidateResult);
	}
	/**
	 * Get ValidateResult
	 * @return boolean
	 */
	public function getValidateResult()
	{
		return $this->ValidateResult;
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