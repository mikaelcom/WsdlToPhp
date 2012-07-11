<?php
/**
 * Class file for GGAdwordsTypeTargetRestrictSetting
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeTargetRestrictSetting
 * Documentation : Target restrict setting. Set useAdGroup to true to indicate the use of adgroup level targeting settings. Set useAdGroup to false to use the old campaign level broad/restrict setting. Choosing this option will be a one-way transition: once you choose it, you cannot go back to the old broad/specific settings. This setting is automatically added to all campaigns created with API v201206 with useAdGroup set to true. Any passed value will be ignored.
 * @date 03/07/2012
 */
class GGAdwordsTypeTargetRestrictSetting extends GGAdwordsTypeSetting
{
	/**
	 * The useAdGroup
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $useAdGroup;
	/**
	 * Constructor
	 * @param boolean useAdGroup
	 * @return GGAdwordsTypeTargetRestrictSetting
	 */
	public function __construct($_useAdGroup = null)
	{
		GGAdwordsWsdlClass::__construct(array('useAdGroup'=>$_useAdGroup));
	}
	/**
	 * Set useAdGroup
	 * @param boolean useAdGroup
	 * @return boolean
	 */
	public function setUseAdGroup($_useAdGroup)
	{
		return ($this->useAdGroup = $_useAdGroup);
	}
	/**
	 * Get useAdGroup
	 * @return boolean
	 */
	public function getUseAdGroup()
	{
		return $this->useAdGroup;
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