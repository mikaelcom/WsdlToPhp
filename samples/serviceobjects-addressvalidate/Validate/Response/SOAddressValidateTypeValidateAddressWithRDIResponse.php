<?php
/**
 * Class file for SOAddressValidateTypeValidateAddressWithRDIResponse
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeValidateAddressWithRDIResponse
 * @date 05/07/2012
 */
class SOAddressValidateTypeValidateAddressWithRDIResponse extends SOAddressValidateWsdlClass
{
	/**
	 * The ValidateAddressWithRDIResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressValidateTypeRDIAddress
	 */
	public $ValidateAddressWithRDIResult;
	/**
	 * Constructor
	 * @param SOAddressValidateTypeRDIAddress ValidateAddressWithRDIResult
	 * @return SOAddressValidateTypeValidateAddressWithRDIResponse
	 */
	public function __construct($_ValidateAddressWithRDIResult = null)
	{
		parent::__construct(array('ValidateAddressWithRDIResult'=>$_ValidateAddressWithRDIResult));
	}
	/**
	 * Set ValidateAddressWithRDIResult
	 * @param RDIAddress ValidateAddressWithRDIResult
	 * @return RDIAddress
	 */
	public function setValidateAddressWithRDIResult($_ValidateAddressWithRDIResult)
	{
		return ($this->ValidateAddressWithRDIResult = $_ValidateAddressWithRDIResult);
	}
	/**
	 * Get ValidateAddressWithRDIResult
	 * @return SOAddressValidateTypeRDIAddress
	 */
	public function getValidateAddressWithRDIResult()
	{
		return $this->ValidateAddressWithRDIResult;
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