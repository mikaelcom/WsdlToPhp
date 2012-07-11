<?php
/**
 * Class file for SOAddressValidateTypeValidateAddressResponse
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeValidateAddressResponse
 * @date 05/07/2012
 */
class SOAddressValidateTypeValidateAddressResponse extends SOAddressValidateWsdlClass
{
	/**
	 * The ValidateAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressValidateTypeAddress
	 */
	public $ValidateAddressResult;
	/**
	 * Constructor
	 * @param SOAddressValidateTypeAddress ValidateAddressResult
	 * @return SOAddressValidateTypeValidateAddressResponse
	 */
	public function __construct($_ValidateAddressResult = null)
	{
		parent::__construct(array('ValidateAddressResult'=>$_ValidateAddressResult));
	}
	/**
	 * Set ValidateAddressResult
	 * @param Address ValidateAddressResult
	 * @return Address
	 */
	public function setValidateAddressResult($_ValidateAddressResult)
	{
		return ($this->ValidateAddressResult = $_ValidateAddressResult);
	}
	/**
	 * Get ValidateAddressResult
	 * @return SOAddressValidateTypeAddress
	 */
	public function getValidateAddressResult()
	{
		return $this->ValidateAddressResult;
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