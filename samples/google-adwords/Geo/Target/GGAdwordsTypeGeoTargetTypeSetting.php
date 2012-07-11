<?php
/**
 * Class file for GGAdwordsTypeGeoTargetTypeSetting
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeGeoTargetTypeSetting
 * Documentation : Represents a collection of settings related to ads geotargeting. <p>AdWords ads can be geotargeted using <b>Location of Presence</b> (<b>LOP</b>), <b>Area of Interest</b> (<b>AOI</b>), or both. LOP is the physical location of the user performing the search; AOI is the geographical region in which the searcher is interested. For example, if a user in New York City performs a search "hotels california", their LOP is New York City and their AOI is California. <p>Additionally, ads can be <b>positively</b> or <b>negatively</b> geotargeted. An ad that is positively geotargeted to New York City only appears to users whose location is related (via AOI or LOP) to New York City. An ad that is negatively geotargeted to New York City appears for <i>all</i> users <i>except</i> those whose location is related to New York City. Ads can only be negatively geotargeted if a positive geotargeting is also supplied, and the negatively geotargeted region must be contained within the positive region. <p>Geotargeting settings allow ads to be targeted in the following way: <ul> <li> Positively geotargeted using solely AOI, solely LOP, or either. <li> Negatively geotargeted using solely LOP, or both. </ul> <p>This setting applies only to ads shown on the search network, and does not affect ads shown on the Google Display Network.
 * @date 03/07/2012
 */
class GGAdwordsTypeGeoTargetTypeSetting extends GGAdwordsTypeSetting
{
	/**
	 * The positiveGeoTargetType
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The setting used for positive geotargeting in this particular campaign. <p>Again, the campaign can be positively targeted using solely LOP, solely AOI, or either. Positive targeting triggers ads <i>only</i> for users whose location is related to the given locations. <p>The default value is DONT_CARE.
	 * @var GGAdwordsTypeGeoTargetTypeSettingPositiveGeoTargetType
	 */
	public $positiveGeoTargetType;
	/**
	 * The negativeGeoTargetType
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The setting used for negative geotargeting in this particular campaign. <p>Again, the campaign can be negatively targeted using solely LOP or both AOI and LOP. Negative targeting triggers ads for <i>all</i> users <i>except</i> those whose location is related to the given locations. <p>The default value is LOP.
	 * @var GGAdwordsTypeGeoTargetTypeSettingNegativeGeoTargetType
	 */
	public $negativeGeoTargetType;
	/**
	 * Constructor
	 * @param GGAdwordsTypeGeoTargetTypeSettingPositiveGeoTargetType positiveGeoTargetType
	 * @param GGAdwordsTypeGeoTargetTypeSettingNegativeGeoTargetType negativeGeoTargetType
	 * @return GGAdwordsTypeGeoTargetTypeSetting
	 */
	public function __construct($_positiveGeoTargetType = null,$_negativeGeoTargetType = null)
	{
		GGAdwordsWsdlClass::__construct(array('positiveGeoTargetType'=>$_positiveGeoTargetType,'negativeGeoTargetType'=>$_negativeGeoTargetType));
	}
	/**
	 * Set positiveGeoTargetType
	 * @param GeoTargetTypeSettingPositiveGeoTargetType positiveGeoTargetType
	 * @return GeoTargetTypeSettingPositiveGeoTargetType
	 */
	public function setPositiveGeoTargetType($_positiveGeoTargetType)
	{
		return ($this->positiveGeoTargetType = GGAdwordsTypeGeoTargetTypeSettingPositiveGeoTargetType::valueIsValid($_positiveGeoTargetType)?$_positiveGeoTargetType:null);
	}
	/**
	 * Get positiveGeoTargetType
	 * @return GGAdwordsTypeGeoTargetTypeSettingPositiveGeoTargetType
	 */
	public function getPositiveGeoTargetType()
	{
		return $this->positiveGeoTargetType;
	}
	/**
	 * Set negativeGeoTargetType
	 * @param GeoTargetTypeSettingNegativeGeoTargetType negativeGeoTargetType
	 * @return GeoTargetTypeSettingNegativeGeoTargetType
	 */
	public function setNegativeGeoTargetType($_negativeGeoTargetType)
	{
		return ($this->negativeGeoTargetType = GGAdwordsTypeGeoTargetTypeSettingNegativeGeoTargetType::valueIsValid($_negativeGeoTargetType)?$_negativeGeoTargetType:null);
	}
	/**
	 * Get negativeGeoTargetType
	 * @return GGAdwordsTypeGeoTargetTypeSettingNegativeGeoTargetType
	 */
	public function getNegativeGeoTargetType()
	{
		return $this->negativeGeoTargetType;
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