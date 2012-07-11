<?php
/**
 * Class file for SOAddressValidateTypeValidateAddressWithDPVResponse
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeValidateAddressWithDPVResponse
 * @date 05/07/2012
 */
class SOAddressValidateTypeValidateAddressWithDPVResponse extends SOAddressValidateWsdlClass
{
	/**
	 * The ValidateAddressWithDPVResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressValidateTypeDPVAddress
	 */
	public $ValidateAddressWithDPVResult;
	/**
	 * Constructor
	 * @param SOAddressValidateTypeDPVAddress ValidateAddressWithDPVResult
	 * @return SOAddressValidateTypeValidateAddressWithDPVResponse
	 */
	public function __construct($_ValidateAddressWithDPVResult = null)
	{
		parent::__construct(array('ValidateAddressWithDPVResult'=>$_ValidateAddressWithDPVResult));
	}
	/**
	 * Set ValidateAddressWithDPVResult
	 * @param DPVAddress ValidateAddressWithDPVResult
	 * @return DPVAddress
	 */
	public function setValidateAddressWithDPVResult($_ValidateAddressWithDPVResult)
	{
		return ($this->ValidateAddressWithDPVResult = $_ValidateAddressWithDPVResult);
	}
	/**
	 * Get ValidateAddressWithDPVResult
	 * @return SOAddressValidateTypeDPVAddress
	 */
	public function getValidateAddressWithDPVResult()
	{
		return $this->ValidateAddressWithDPVResult;
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