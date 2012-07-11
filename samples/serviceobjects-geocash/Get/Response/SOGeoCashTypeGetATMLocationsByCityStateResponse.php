<?php
/**
 * Class file for SOGeoCashTypeGetATMLocationsByCityStateResponse
 * @date 08/07/2012
 */
/**
 * Class SOGeoCashTypeGetATMLocationsByCityStateResponse
 * @date 08/07/2012
 */
class SOGeoCashTypeGetATMLocationsByCityStateResponse extends SOGeoCashWsdlClass
{
	/**
	 * The GetATMLocationsByCityStateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCashTypeATMLocations
	 */
	public $GetATMLocationsByCityStateResult;
	/**
	 * Constructor
	 * @param SOGeoCashTypeATMLocations GetATMLocationsByCityStateResult
	 * @return SOGeoCashTypeGetATMLocationsByCityStateResponse
	 */
	public function __construct($_GetATMLocationsByCityStateResult = null)
	{
		parent::__construct(array('GetATMLocationsByCityStateResult'=>$_GetATMLocationsByCityStateResult));
	}
	/**
	 * Set GetATMLocationsByCityStateResult
	 * @param ATMLocations GetATMLocationsByCityStateResult
	 * @return ATMLocations
	 */
	public function setGetATMLocationsByCityStateResult($_GetATMLocationsByCityStateResult)
	{
		return ($this->GetATMLocationsByCityStateResult = $_GetATMLocationsByCityStateResult);
	}
	/**
	 * Get GetATMLocationsByCityStateResult
	 * @return SOGeoCashTypeATMLocations
	 */
	public function getGetATMLocationsByCityStateResult()
	{
		return $this->GetATMLocationsByCityStateResult;
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