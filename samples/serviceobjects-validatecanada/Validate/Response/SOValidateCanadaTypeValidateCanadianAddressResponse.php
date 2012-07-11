<?php
/**
 * Class file for SOValidateCanadaTypeValidateCanadianAddressResponse
 * @date 05/07/2012
 */
/**
 * Class SOValidateCanadaTypeValidateCanadianAddressResponse
 * @date 05/07/2012
 */
class SOValidateCanadaTypeValidateCanadianAddressResponse extends SOValidateCanadaWsdlClass
{
	/**
	 * The ValidateCanadianAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOValidateCanadaTypeAddress
	 */
	public $ValidateCanadianAddressResult;
	/**
	 * Constructor
	 * @param SOValidateCanadaTypeAddress ValidateCanadianAddressResult
	 * @return SOValidateCanadaTypeValidateCanadianAddressResponse
	 */
	public function __construct($_ValidateCanadianAddressResult = null)
	{
		parent::__construct(array('ValidateCanadianAddressResult'=>$_ValidateCanadianAddressResult));
	}
	/**
	 * Set ValidateCanadianAddressResult
	 * @param Address ValidateCanadianAddressResult
	 * @return Address
	 */
	public function setValidateCanadianAddressResult($_ValidateCanadianAddressResult)
	{
		return ($this->ValidateCanadianAddressResult = $_ValidateCanadianAddressResult);
	}
	/**
	 * Get ValidateCanadianAddressResult
	 * @return SOValidateCanadaTypeAddress
	 */
	public function getValidateCanadianAddressResult()
	{
		return $this->ValidateCanadianAddressResult;
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