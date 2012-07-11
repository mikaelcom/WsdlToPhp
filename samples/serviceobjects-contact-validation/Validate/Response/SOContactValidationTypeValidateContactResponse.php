<?php
/**
 * Class file for SOContactValidationTypeValidateContactResponse
 * @date 08/07/2012
 */
/**
 * Class SOContactValidationTypeValidateContactResponse
 * @date 08/07/2012
 */
class SOContactValidationTypeValidateContactResponse extends SOContactValidationWsdlClass
{
	/**
	 * The ValidateContactResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOContactValidationTypeContact
	 */
	public $ValidateContactResult;
	/**
	 * Constructor
	 * @param SOContactValidationTypeContact ValidateContactResult
	 * @return SOContactValidationTypeValidateContactResponse
	 */
	public function __construct($_ValidateContactResult = null)
	{
		parent::__construct(array('ValidateContactResult'=>$_ValidateContactResult));
	}
	/**
	 * Set ValidateContactResult
	 * @param Contact ValidateContactResult
	 * @return Contact
	 */
	public function setValidateContactResult($_ValidateContactResult)
	{
		return ($this->ValidateContactResult = $_ValidateContactResult);
	}
	/**
	 * Get ValidateContactResult
	 * @return SOContactValidationTypeContact
	 */
	public function getValidateContactResult()
	{
		return $this->ValidateContactResult;
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