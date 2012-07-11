<?php
/**
 * Class file for SOGeoCashTypeGetATMLocationsByZipStreetResponse
 * @date 08/07/2012
 */
/**
 * Class SOGeoCashTypeGetATMLocationsByZipStreetResponse
 * @date 08/07/2012
 */
class SOGeoCashTypeGetATMLocationsByZipStreetResponse extends SOGeoCashWsdlClass
{
	/**
	 * The GetATMLocationsByZipStreetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCashTypeATMLocations
	 */
	public $GetATMLocationsByZipStreetResult;
	/**
	 * Constructor
	 * @param SOGeoCashTypeATMLocations GetATMLocationsByZipStreetResult
	 * @return SOGeoCashTypeGetATMLocationsByZipStreetResponse
	 */
	public function __construct($_GetATMLocationsByZipStreetResult = null)
	{
		parent::__construct(array('GetATMLocationsByZipStreetResult'=>$_GetATMLocationsByZipStreetResult));
	}
	/**
	 * Set GetATMLocationsByZipStreetResult
	 * @param ATMLocations GetATMLocationsByZipStreetResult
	 * @return ATMLocations
	 */
	public function setGetATMLocationsByZipStreetResult($_GetATMLocationsByZipStreetResult)
	{
		return ($this->GetATMLocationsByZipStreetResult = $_GetATMLocationsByZipStreetResult);
	}
	/**
	 * Get GetATMLocationsByZipStreetResult
	 * @return SOGeoCashTypeATMLocations
	 */
	public function getGetATMLocationsByZipStreetResult()
	{
		return $this->GetATMLocationsByZipStreetResult;
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