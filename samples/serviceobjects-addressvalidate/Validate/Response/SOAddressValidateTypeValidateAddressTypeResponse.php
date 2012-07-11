<?php
/**
 * Class file for SOAddressValidateTypeValidateAddressTypeResponse
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeValidateAddressTypeResponse
 * @date 05/07/2012
 */
class SOAddressValidateTypeValidateAddressTypeResponse extends SOAddressValidateWsdlClass
{
	/**
	 * The ValidateAddressTypeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressValidateTypeAddressType
	 */
	public $ValidateAddressTypeResult;
	/**
	 * Constructor
	 * @param SOAddressValidateTypeAddressType ValidateAddressTypeResult
	 * @return SOAddressValidateTypeValidateAddressTypeResponse
	 */
	public function __construct($_ValidateAddressTypeResult = null)
	{
		parent::__construct(array('ValidateAddressTypeResult'=>$_ValidateAddressTypeResult));
	}
	/**
	 * Set ValidateAddressTypeResult
	 * @param AddressType ValidateAddressTypeResult
	 * @return AddressType
	 */
	public function setValidateAddressTypeResult($_ValidateAddressTypeResult)
	{
		return ($this->ValidateAddressTypeResult = $_ValidateAddressTypeResult);
	}
	/**
	 * Get ValidateAddressTypeResult
	 * @return SOAddressValidateTypeAddressType
	 */
	public function getValidateAddressTypeResult()
	{
		return $this->ValidateAddressTypeResult;
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