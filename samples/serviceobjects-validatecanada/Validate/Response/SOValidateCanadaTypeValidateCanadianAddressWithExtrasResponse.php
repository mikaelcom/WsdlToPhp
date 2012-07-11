<?php
/**
 * Class file for SOValidateCanadaTypeValidateCanadianAddressWithExtrasResponse
 * @date 05/07/2012
 */
/**
 * Class SOValidateCanadaTypeValidateCanadianAddressWithExtrasResponse
 * @date 05/07/2012
 */
class SOValidateCanadaTypeValidateCanadianAddressWithExtrasResponse extends SOValidateCanadaWsdlClass
{
	/**
	 * The ValidateCanadianAddressWithExtrasResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOValidateCanadaTypeAddressWithExtra
	 */
	public $ValidateCanadianAddressWithExtrasResult;
	/**
	 * Constructor
	 * @param SOValidateCanadaTypeAddressWithExtra ValidateCanadianAddressWithExtrasResult
	 * @return SOValidateCanadaTypeValidateCanadianAddressWithExtrasResponse
	 */
	public function __construct($_ValidateCanadianAddressWithExtrasResult = null)
	{
		parent::__construct(array('ValidateCanadianAddressWithExtrasResult'=>$_ValidateCanadianAddressWithExtrasResult));
	}
	/**
	 * Set ValidateCanadianAddressWithExtrasResult
	 * @param AddressWithExtra ValidateCanadianAddressWithExtrasResult
	 * @return AddressWithExtra
	 */
	public function setValidateCanadianAddressWithExtrasResult($_ValidateCanadianAddressWithExtrasResult)
	{
		return ($this->ValidateCanadianAddressWithExtrasResult = $_ValidateCanadianAddressWithExtrasResult);
	}
	/**
	 * Get ValidateCanadianAddressWithExtrasResult
	 * @return SOValidateCanadaTypeAddressWithExtra
	 */
	public function getValidateCanadianAddressWithExtrasResult()
	{
		return $this->ValidateCanadianAddressWithExtrasResult;
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