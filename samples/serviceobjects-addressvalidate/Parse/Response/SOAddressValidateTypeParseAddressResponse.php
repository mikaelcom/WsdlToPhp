<?php
/**
 * Class file for SOAddressValidateTypeParseAddressResponse
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeParseAddressResponse
 * @date 05/07/2012
 */
class SOAddressValidateTypeParseAddressResponse extends SOAddressValidateWsdlClass
{
	/**
	 * The ParseAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressValidateTypeFragmentAddress
	 */
	public $ParseAddressResult;
	/**
	 * Constructor
	 * @param SOAddressValidateTypeFragmentAddress ParseAddressResult
	 * @return SOAddressValidateTypeParseAddressResponse
	 */
	public function __construct($_ParseAddressResult = null)
	{
		parent::__construct(array('ParseAddressResult'=>$_ParseAddressResult));
	}
	/**
	 * Set ParseAddressResult
	 * @param FragmentAddress ParseAddressResult
	 * @return FragmentAddress
	 */
	public function setParseAddressResult($_ParseAddressResult)
	{
		return ($this->ParseAddressResult = $_ParseAddressResult);
	}
	/**
	 * Get ParseAddressResult
	 * @return SOAddressValidateTypeFragmentAddress
	 */
	public function getParseAddressResult()
	{
		return $this->ParseAddressResult;
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