<?php
/**
 * Class file for SOAddressPlusTypeGetAddressPlusNoCensusResponse
 * @date 05/07/2012
 */
/**
 * Class SOAddressPlusTypeGetAddressPlusNoCensusResponse
 * @date 05/07/2012
 */
class SOAddressPlusTypeGetAddressPlusNoCensusResponse extends SOAddressPlusWsdlClass
{
	/**
	 * The GetAddressPlusNoCensusResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressPlusTypeAddressPlus
	 */
	public $GetAddressPlusNoCensusResult;
	/**
	 * Constructor
	 * @param SOAddressPlusTypeAddressPlus GetAddressPlusNoCensusResult
	 * @return SOAddressPlusTypeGetAddressPlusNoCensusResponse
	 */
	public function __construct($_GetAddressPlusNoCensusResult = null)
	{
		parent::__construct(array('GetAddressPlusNoCensusResult'=>$_GetAddressPlusNoCensusResult));
	}
	/**
	 * Set GetAddressPlusNoCensusResult
	 * @param AddressPlus GetAddressPlusNoCensusResult
	 * @return AddressPlus
	 */
	public function setGetAddressPlusNoCensusResult($_GetAddressPlusNoCensusResult)
	{
		return ($this->GetAddressPlusNoCensusResult = $_GetAddressPlusNoCensusResult);
	}
	/**
	 * Get GetAddressPlusNoCensusResult
	 * @return SOAddressPlusTypeAddressPlus
	 */
	public function getGetAddressPlusNoCensusResult()
	{
		return $this->GetAddressPlusNoCensusResult;
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