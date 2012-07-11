<?php
/**
 * Class file for SOAddressPlusTypeGetAddressPlusResponse
 * @date 05/07/2012
 */
/**
 * Class SOAddressPlusTypeGetAddressPlusResponse
 * @date 05/07/2012
 */
class SOAddressPlusTypeGetAddressPlusResponse extends SOAddressPlusWsdlClass
{
	/**
	 * The GetAddressPlusResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressPlusTypeAddressPlus
	 */
	public $GetAddressPlusResult;
	/**
	 * Constructor
	 * @param SOAddressPlusTypeAddressPlus GetAddressPlusResult
	 * @return SOAddressPlusTypeGetAddressPlusResponse
	 */
	public function __construct($_GetAddressPlusResult = null)
	{
		parent::__construct(array('GetAddressPlusResult'=>$_GetAddressPlusResult));
	}
	/**
	 * Set GetAddressPlusResult
	 * @param AddressPlus GetAddressPlusResult
	 * @return AddressPlus
	 */
	public function setGetAddressPlusResult($_GetAddressPlusResult)
	{
		return ($this->GetAddressPlusResult = $_GetAddressPlusResult);
	}
	/**
	 * Get GetAddressPlusResult
	 * @return SOAddressPlusTypeAddressPlus
	 */
	public function getGetAddressPlusResult()
	{
		return $this->GetAddressPlusResult;
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