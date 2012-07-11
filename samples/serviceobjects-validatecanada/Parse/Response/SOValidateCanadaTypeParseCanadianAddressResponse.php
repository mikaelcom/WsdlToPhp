<?php
/**
 * Class file for SOValidateCanadaTypeParseCanadianAddressResponse
 * @date 05/07/2012
 */
/**
 * Class SOValidateCanadaTypeParseCanadianAddressResponse
 * @date 05/07/2012
 */
class SOValidateCanadaTypeParseCanadianAddressResponse extends SOValidateCanadaWsdlClass
{
	/**
	 * The ParseCanadianAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOValidateCanadaTypeAddress
	 */
	public $ParseCanadianAddressResult;
	/**
	 * Constructor
	 * @param SOValidateCanadaTypeAddress ParseCanadianAddressResult
	 * @return SOValidateCanadaTypeParseCanadianAddressResponse
	 */
	public function __construct($_ParseCanadianAddressResult = null)
	{
		parent::__construct(array('ParseCanadianAddressResult'=>$_ParseCanadianAddressResult));
	}
	/**
	 * Set ParseCanadianAddressResult
	 * @param Address ParseCanadianAddressResult
	 * @return Address
	 */
	public function setParseCanadianAddressResult($_ParseCanadianAddressResult)
	{
		return ($this->ParseCanadianAddressResult = $_ParseCanadianAddressResult);
	}
	/**
	 * Get ParseCanadianAddressResult
	 * @return SOValidateCanadaTypeAddress
	 */
	public function getParseCanadianAddressResult()
	{
		return $this->ParseCanadianAddressResult;
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