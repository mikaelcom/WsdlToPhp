<?php
/**
 * Class file for SOAddressPlusTypeGetAddressPlusWithDPVResponse
 * @date 05/07/2012
 */
/**
 * Class SOAddressPlusTypeGetAddressPlusWithDPVResponse
 * @date 05/07/2012
 */
class SOAddressPlusTypeGetAddressPlusWithDPVResponse extends SOAddressPlusWsdlClass
{
	/**
	 * The GetAddressPlusWithDPVResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressPlusTypeAddressPlus
	 */
	public $GetAddressPlusWithDPVResult;
	/**
	 * Constructor
	 * @param SOAddressPlusTypeAddressPlus GetAddressPlusWithDPVResult
	 * @return SOAddressPlusTypeGetAddressPlusWithDPVResponse
	 */
	public function __construct($_GetAddressPlusWithDPVResult = null)
	{
		parent::__construct(array('GetAddressPlusWithDPVResult'=>$_GetAddressPlusWithDPVResult));
	}
	/**
	 * Set GetAddressPlusWithDPVResult
	 * @param AddressPlus GetAddressPlusWithDPVResult
	 * @return AddressPlus
	 */
	public function setGetAddressPlusWithDPVResult($_GetAddressPlusWithDPVResult)
	{
		return ($this->GetAddressPlusWithDPVResult = $_GetAddressPlusWithDPVResult);
	}
	/**
	 * Get GetAddressPlusWithDPVResult
	 * @return SOAddressPlusTypeAddressPlus
	 */
	public function getGetAddressPlusWithDPVResult()
	{
		return $this->GetAddressPlusWithDPVResult;
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