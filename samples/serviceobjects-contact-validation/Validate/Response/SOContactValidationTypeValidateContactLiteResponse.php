<?php
/**
 * Class file for SOContactValidationTypeValidateContactLiteResponse
 * @date 08/07/2012
 */
/**
 * Class SOContactValidationTypeValidateContactLiteResponse
 * @date 08/07/2012
 */
class SOContactValidationTypeValidateContactLiteResponse extends SOContactValidationWsdlClass
{
	/**
	 * The ValidateContactLiteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOContactValidationTypeContact
	 */
	public $ValidateContactLiteResult;
	/**
	 * Constructor
	 * @param SOContactValidationTypeContact ValidateContactLiteResult
	 * @return SOContactValidationTypeValidateContactLiteResponse
	 */
	public function __construct($_ValidateContactLiteResult = null)
	{
		parent::__construct(array('ValidateContactLiteResult'=>$_ValidateContactLiteResult));
	}
	/**
	 * Set ValidateContactLiteResult
	 * @param Contact ValidateContactLiteResult
	 * @return Contact
	 */
	public function setValidateContactLiteResult($_ValidateContactLiteResult)
	{
		return ($this->ValidateContactLiteResult = $_ValidateContactLiteResult);
	}
	/**
	 * Get ValidateContactLiteResult
	 * @return SOContactValidationTypeContact
	 */
	public function getValidateContactLiteResult()
	{
		return $this->ValidateContactLiteResult;
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