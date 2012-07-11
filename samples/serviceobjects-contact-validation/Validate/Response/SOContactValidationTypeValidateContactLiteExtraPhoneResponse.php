<?php
/**
 * Class file for SOContactValidationTypeValidateContactLiteExtraPhoneResponse
 * @date 08/07/2012
 */
/**
 * Class SOContactValidationTypeValidateContactLiteExtraPhoneResponse
 * @date 08/07/2012
 */
class SOContactValidationTypeValidateContactLiteExtraPhoneResponse extends SOContactValidationWsdlClass
{
	/**
	 * The ValidateContactLiteExtraPhoneResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOContactValidationTypeContact
	 */
	public $ValidateContactLiteExtraPhoneResult;
	/**
	 * Constructor
	 * @param SOContactValidationTypeContact ValidateContactLiteExtraPhoneResult
	 * @return SOContactValidationTypeValidateContactLiteExtraPhoneResponse
	 */
	public function __construct($_ValidateContactLiteExtraPhoneResult = null)
	{
		parent::__construct(array('ValidateContactLiteExtraPhoneResult'=>$_ValidateContactLiteExtraPhoneResult));
	}
	/**
	 * Set ValidateContactLiteExtraPhoneResult
	 * @param Contact ValidateContactLiteExtraPhoneResult
	 * @return Contact
	 */
	public function setValidateContactLiteExtraPhoneResult($_ValidateContactLiteExtraPhoneResult)
	{
		return ($this->ValidateContactLiteExtraPhoneResult = $_ValidateContactLiteExtraPhoneResult);
	}
	/**
	 * Get ValidateContactLiteExtraPhoneResult
	 * @return SOContactValidationTypeContact
	 */
	public function getValidateContactLiteExtraPhoneResult()
	{
		return $this->ValidateContactLiteExtraPhoneResult;
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