<?php
/**
 * Class file for SOAddressValidateTypeValidateCityStateZipResponse
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeValidateCityStateZipResponse
 * @date 05/07/2012
 */
class SOAddressValidateTypeValidateCityStateZipResponse extends SOAddressValidateWsdlClass
{
	/**
	 * The ValidateCityStateZipResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressValidateTypeAreaAddress
	 */
	public $ValidateCityStateZipResult;
	/**
	 * Constructor
	 * @param SOAddressValidateTypeAreaAddress ValidateCityStateZipResult
	 * @return SOAddressValidateTypeValidateCityStateZipResponse
	 */
	public function __construct($_ValidateCityStateZipResult = null)
	{
		parent::__construct(array('ValidateCityStateZipResult'=>$_ValidateCityStateZipResult));
	}
	/**
	 * Set ValidateCityStateZipResult
	 * @param AreaAddress ValidateCityStateZipResult
	 * @return AreaAddress
	 */
	public function setValidateCityStateZipResult($_ValidateCityStateZipResult)
	{
		return ($this->ValidateCityStateZipResult = $_ValidateCityStateZipResult);
	}
	/**
	 * Get ValidateCityStateZipResult
	 * @return SOAddressValidateTypeAreaAddress
	 */
	public function getValidateCityStateZipResult()
	{
		return $this->ValidateCityStateZipResult;
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