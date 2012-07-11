<?php
/**
 * Class file for SOAddressValidateTypeValidateAddressWithSuiteLinkResponse
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeValidateAddressWithSuiteLinkResponse
 * @date 05/07/2012
 */
class SOAddressValidateTypeValidateAddressWithSuiteLinkResponse extends SOAddressValidateWsdlClass
{
	/**
	 * The ValidateAddressWithSuiteLinkResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressValidateTypeDPVAddress
	 */
	public $ValidateAddressWithSuiteLinkResult;
	/**
	 * Constructor
	 * @param SOAddressValidateTypeDPVAddress ValidateAddressWithSuiteLinkResult
	 * @return SOAddressValidateTypeValidateAddressWithSuiteLinkResponse
	 */
	public function __construct($_ValidateAddressWithSuiteLinkResult = null)
	{
		parent::__construct(array('ValidateAddressWithSuiteLinkResult'=>$_ValidateAddressWithSuiteLinkResult));
	}
	/**
	 * Set ValidateAddressWithSuiteLinkResult
	 * @param DPVAddress ValidateAddressWithSuiteLinkResult
	 * @return DPVAddress
	 */
	public function setValidateAddressWithSuiteLinkResult($_ValidateAddressWithSuiteLinkResult)
	{
		return ($this->ValidateAddressWithSuiteLinkResult = $_ValidateAddressWithSuiteLinkResult);
	}
	/**
	 * Get ValidateAddressWithSuiteLinkResult
	 * @return SOAddressValidateTypeDPVAddress
	 */
	public function getValidateAddressWithSuiteLinkResult()
	{
		return $this->ValidateAddressWithSuiteLinkResult;
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