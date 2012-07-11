<?php
/**
 * Class file for CdyneAddressTypeReturnCityStateResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeReturnCityStateResponse
 * @date 02/07/2012
 */
class CdyneAddressTypeReturnCityStateResponse extends CdyneAddressWsdlClass
{
	/**
	 * The ReturnCityStateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneAddressTypeAddress
	 */
	public $ReturnCityStateResult;
	/**
	 * Constructor
	 * @param CdyneAddressTypeAddress ReturnCityStateResult
	 * @return CdyneAddressTypeReturnCityStateResponse
	 */
	public function __construct($_ReturnCityStateResult = null)
	{
		parent::__construct(array('ReturnCityStateResult'=>$_ReturnCityStateResult));
	}
	/**
	 * Set ReturnCityStateResult
	 * @param Address ReturnCityStateResult
	 * @return Address
	 */
	public function setReturnCityStateResult($_ReturnCityStateResult)
	{
		return ($this->ReturnCityStateResult = $_ReturnCityStateResult);
	}
	/**
	 * Get ReturnCityStateResult
	 * @return CdyneAddressTypeAddress
	 */
	public function getReturnCityStateResult()
	{
		return $this->ReturnCityStateResult;
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