<?php
/**
 * Class file for SOGeoCashTypeGetATMLocationsByZipRadiusResponse
 * @date 08/07/2012
 */
/**
 * Class SOGeoCashTypeGetATMLocationsByZipRadiusResponse
 * @date 08/07/2012
 */
class SOGeoCashTypeGetATMLocationsByZipRadiusResponse extends SOGeoCashWsdlClass
{
	/**
	 * The GetATMLocationsByZipRadiusResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCashTypeATMLocations
	 */
	public $GetATMLocationsByZipRadiusResult;
	/**
	 * Constructor
	 * @param SOGeoCashTypeATMLocations GetATMLocationsByZipRadiusResult
	 * @return SOGeoCashTypeGetATMLocationsByZipRadiusResponse
	 */
	public function __construct($_GetATMLocationsByZipRadiusResult = null)
	{
		parent::__construct(array('GetATMLocationsByZipRadiusResult'=>$_GetATMLocationsByZipRadiusResult));
	}
	/**
	 * Set GetATMLocationsByZipRadiusResult
	 * @param ATMLocations GetATMLocationsByZipRadiusResult
	 * @return ATMLocations
	 */
	public function setGetATMLocationsByZipRadiusResult($_GetATMLocationsByZipRadiusResult)
	{
		return ($this->GetATMLocationsByZipRadiusResult = $_GetATMLocationsByZipRadiusResult);
	}
	/**
	 * Get GetATMLocationsByZipRadiusResult
	 * @return SOGeoCashTypeATMLocations
	 */
	public function getGetATMLocationsByZipRadiusResult()
	{
		return $this->GetATMLocationsByZipRadiusResult;
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