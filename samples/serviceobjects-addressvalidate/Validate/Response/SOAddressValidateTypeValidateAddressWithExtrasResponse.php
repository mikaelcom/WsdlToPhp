<?php
/**
 * Class file for SOAddressValidateTypeValidateAddressWithExtrasResponse
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeValidateAddressWithExtrasResponse
 * @date 05/07/2012
 */
class SOAddressValidateTypeValidateAddressWithExtrasResponse extends SOAddressValidateWsdlClass
{
	/**
	 * The ValidateAddressWithExtrasResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressValidateTypeAddress
	 */
	public $ValidateAddressWithExtrasResult;
	/**
	 * Constructor
	 * @param SOAddressValidateTypeAddress ValidateAddressWithExtrasResult
	 * @return SOAddressValidateTypeValidateAddressWithExtrasResponse
	 */
	public function __construct($_ValidateAddressWithExtrasResult = null)
	{
		parent::__construct(array('ValidateAddressWithExtrasResult'=>$_ValidateAddressWithExtrasResult));
	}
	/**
	 * Set ValidateAddressWithExtrasResult
	 * @param Address ValidateAddressWithExtrasResult
	 * @return Address
	 */
	public function setValidateAddressWithExtrasResult($_ValidateAddressWithExtrasResult)
	{
		return ($this->ValidateAddressWithExtrasResult = $_ValidateAddressWithExtrasResult);
	}
	/**
	 * Get ValidateAddressWithExtrasResult
	 * @return SOAddressValidateTypeAddress
	 */
	public function getValidateAddressWithExtrasResult()
	{
		return $this->ValidateAddressWithExtrasResult;
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