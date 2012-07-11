<?php
/**
 * Class file for SOContactValidationTypeValidateContactNoEmailCheckResponse
 * @date 08/07/2012
 */
/**
 * Class SOContactValidationTypeValidateContactNoEmailCheckResponse
 * @date 08/07/2012
 */
class SOContactValidationTypeValidateContactNoEmailCheckResponse extends SOContactValidationWsdlClass
{
	/**
	 * The ValidateContactNoEmailCheckResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOContactValidationTypeContact
	 */
	public $ValidateContactNoEmailCheckResult;
	/**
	 * Constructor
	 * @param SOContactValidationTypeContact ValidateContactNoEmailCheckResult
	 * @return SOContactValidationTypeValidateContactNoEmailCheckResponse
	 */
	public function __construct($_ValidateContactNoEmailCheckResult = null)
	{
		parent::__construct(array('ValidateContactNoEmailCheckResult'=>$_ValidateContactNoEmailCheckResult));
	}
	/**
	 * Set ValidateContactNoEmailCheckResult
	 * @param Contact ValidateContactNoEmailCheckResult
	 * @return Contact
	 */
	public function setValidateContactNoEmailCheckResult($_ValidateContactNoEmailCheckResult)
	{
		return ($this->ValidateContactNoEmailCheckResult = $_ValidateContactNoEmailCheckResult);
	}
	/**
	 * Get ValidateContactNoEmailCheckResult
	 * @return SOContactValidationTypeContact
	 */
	public function getValidateContactNoEmailCheckResult()
	{
		return $this->ValidateContactNoEmailCheckResult;
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