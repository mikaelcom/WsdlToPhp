<?php
/**
 * Class file for SOAddressValidateTypeValidateAddressSingleLineResponse
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeValidateAddressSingleLineResponse
 * @date 05/07/2012
 */
class SOAddressValidateTypeValidateAddressSingleLineResponse extends SOAddressValidateWsdlClass
{
	/**
	 * The ValidateAddressSingleLineResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressValidateTypeFragmentAddress
	 */
	public $ValidateAddressSingleLineResult;
	/**
	 * Constructor
	 * @param SOAddressValidateTypeFragmentAddress ValidateAddressSingleLineResult
	 * @return SOAddressValidateTypeValidateAddressSingleLineResponse
	 */
	public function __construct($_ValidateAddressSingleLineResult = null)
	{
		parent::__construct(array('ValidateAddressSingleLineResult'=>$_ValidateAddressSingleLineResult));
	}
	/**
	 * Set ValidateAddressSingleLineResult
	 * @param FragmentAddress ValidateAddressSingleLineResult
	 * @return FragmentAddress
	 */
	public function setValidateAddressSingleLineResult($_ValidateAddressSingleLineResult)
	{
		return ($this->ValidateAddressSingleLineResult = $_ValidateAddressSingleLineResult);
	}
	/**
	 * Get ValidateAddressSingleLineResult
	 * @return SOAddressValidateTypeFragmentAddress
	 */
	public function getValidateAddressSingleLineResult()
	{
		return $this->ValidateAddressSingleLineResult;
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