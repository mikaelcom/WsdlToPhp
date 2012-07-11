<?php
/**
 * Class file for SOContactValidationTypeValidateContactNoNameToEmailCheckResponse
 * @date 08/07/2012
 */
/**
 * Class SOContactValidationTypeValidateContactNoNameToEmailCheckResponse
 * @date 08/07/2012
 */
class SOContactValidationTypeValidateContactNoNameToEmailCheckResponse extends SOContactValidationWsdlClass
{
	/**
	 * The ValidateContactNoNameToEmailCheckResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOContactValidationTypeContact
	 */
	public $ValidateContactNoNameToEmailCheckResult;
	/**
	 * Constructor
	 * @param SOContactValidationTypeContact ValidateContactNoNameToEmailCheckResult
	 * @return SOContactValidationTypeValidateContactNoNameToEmailCheckResponse
	 */
	public function __construct($_ValidateContactNoNameToEmailCheckResult = null)
	{
		parent::__construct(array('ValidateContactNoNameToEmailCheckResult'=>$_ValidateContactNoNameToEmailCheckResult));
	}
	/**
	 * Set ValidateContactNoNameToEmailCheckResult
	 * @param Contact ValidateContactNoNameToEmailCheckResult
	 * @return Contact
	 */
	public function setValidateContactNoNameToEmailCheckResult($_ValidateContactNoNameToEmailCheckResult)
	{
		return ($this->ValidateContactNoNameToEmailCheckResult = $_ValidateContactNoNameToEmailCheckResult);
	}
	/**
	 * Get ValidateContactNoNameToEmailCheckResult
	 * @return SOContactValidationTypeContact
	 */
	public function getValidateContactNoNameToEmailCheckResult()
	{
		return $this->ValidateContactNoNameToEmailCheckResult;
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