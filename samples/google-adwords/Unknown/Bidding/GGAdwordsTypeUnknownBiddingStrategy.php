<?php
/**
 * Class file for GGAdwordsTypeUnknownBiddingStrategy
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeUnknownBiddingStrategy
 * Documentation : This bidding strategy is used for return value only. This will be returned typically due to incompatibility with your WSDL version. <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @date 03/07/2012
 */
class GGAdwordsTypeUnknownBiddingStrategy extends GGAdwordsTypeBiddingStrategy
{
	/**
	 * The forwardCompatibilityMap
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : This Map provides a place to put data about new bidding strategies for older versions of the AdWords API.
	 * @var GGAdwordsTypeString_StringMapEntry
	 */
	public $forwardCompatibilityMap;
	/**
	 * Constructor
	 * @param GGAdwordsTypeString_StringMapEntry forwardCompatibilityMap
	 * @return GGAdwordsTypeUnknownBiddingStrategy
	 */
	public function __construct($_forwardCompatibilityMap = null)
	{
		GGAdwordsWsdlClass::__construct(array('forwardCompatibilityMap'=>$_forwardCompatibilityMap));
	}
	/**
	 * Set forwardCompatibilityMap
	 * @param String_StringMapEntry forwardCompatibilityMap
	 * @return String_StringMapEntry
	 */
	public function setForwardCompatibilityMap($_forwardCompatibilityMap)
	{
		return ($this->forwardCompatibilityMap = $_forwardCompatibilityMap);
	}
	/**
	 * Get forwardCompatibilityMap
	 * @return GGAdwordsTypeString_StringMapEntry
	 */
	public function getForwardCompatibilityMap()
	{
		return $this->forwardCompatibilityMap;
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