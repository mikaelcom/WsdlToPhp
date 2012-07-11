<?php
/**
 * Class file for SOGeoCashTypeGetATMLocationsResponse
 * @date 08/07/2012
 */
/**
 * Class SOGeoCashTypeGetATMLocationsResponse
 * @date 08/07/2012
 */
class SOGeoCashTypeGetATMLocationsResponse extends SOGeoCashWsdlClass
{
	/**
	 * The GetATMLocationsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCashTypeATMLocations
	 */
	public $GetATMLocationsResult;
	/**
	 * Constructor
	 * @param SOGeoCashTypeATMLocations GetATMLocationsResult
	 * @return SOGeoCashTypeGetATMLocationsResponse
	 */
	public function __construct($_GetATMLocationsResult = null)
	{
		parent::__construct(array('GetATMLocationsResult'=>$_GetATMLocationsResult));
	}
	/**
	 * Set GetATMLocationsResult
	 * @param ATMLocations GetATMLocationsResult
	 * @return ATMLocations
	 */
	public function setGetATMLocationsResult($_GetATMLocationsResult)
	{
		return ($this->GetATMLocationsResult = $_GetATMLocationsResult);
	}
	/**
	 * Get GetATMLocationsResult
	 * @return SOGeoCashTypeATMLocations
	 */
	public function getGetATMLocationsResult()
	{
		return $this->GetATMLocationsResult;
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