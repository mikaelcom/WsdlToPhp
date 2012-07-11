<?php
/**
 * Class file for GGAdwordsTypeRealTimeBiddingSetting
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeRealTimeBiddingSetting
 * Documentation : Settings for Real-Time Bidding, a feature only available for campaigns targeting the Ad Exchange network.
 * @date 03/07/2012
 */
class GGAdwordsTypeRealTimeBiddingSetting extends GGAdwordsTypeSetting
{
	/**
	 * The optIn
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the campaign is opted in to real-time bidding.
	 * @var boolean
	 */
	public $optIn;
	/**
	 * Constructor
	 * @param boolean optIn
	 * @return GGAdwordsTypeRealTimeBiddingSetting
	 */
	public function __construct($_optIn = null)
	{
		GGAdwordsWsdlClass::__construct(array('optIn'=>$_optIn));
	}
	/**
	 * Set optIn
	 * @param boolean optIn
	 * @return boolean
	 */
	public function setOptIn($_optIn)
	{
		return ($this->optIn = $_optIn);
	}
	/**
	 * Get optIn
	 * @return boolean
	 */
	public function getOptIn()
	{
		return $this->optIn;
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