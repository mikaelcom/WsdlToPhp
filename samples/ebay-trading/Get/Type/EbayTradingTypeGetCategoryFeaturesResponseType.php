<?php
/**
 * Class file for EbayTradingTypeGetCategoryFeaturesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetCategoryFeaturesResponseType
 * @date 04/07/2012
 */
class EbayTradingTypeGetCategoryFeaturesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The CategoryVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the current version of the set of feature meta-data. Compare this value to the version of the last version you downloaded to determine whether the data may have changed.
	 * @var string
	 */
	public $CategoryVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives the time in GMT that the feature flags for the category hierarchy were last updated.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A category whose feature settings are different from the settings of its parent category.<br> <br> For example, suppose there is a branch of the category tree with 5 category levels (L1, L2, L3, L4, and L5). Suppose the feature settings for SiteDefaults, L1, L4, and L5 are all "A", and the settings for L2 and L3 are "B". In this case:<br> L1's settings (A) match the site default, so L1 is not returned.<br> L2's settings (B) are different from L1's, so L2 is returned.<br> L3's settings (B) are the same as L2's, so L3 is not returned<br> L4's settings (A) are different from L3's, so L4 is returned<br> L5's settings (A) are the same as L4's, so L5 is not returned.<br> <br> If you specified a particular FeatureID in the request, this field only returns feature settings for that feature. Only returned when the category is different from its parent. If the category has children and they aren't returned, it means the children inherit the category's feature settings.
	 * @var EbayTradingTypeCategoryFeatureType
	 */
	public $Category;
	/**
	 * The SiteDefaults
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the feature settings defined for most categories on the site. Most categories share these settings. However, some categories can override some settings, as indicated in the Category nodes (if any).
	 * @var EbayTradingTypeSiteDefaultsType
	 */
	public $SiteDefaults;
	/**
	 * The FeatureDefinitions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns definitions of the various features on the site, or the features you requested in FeatureID (if any). Each feature has a node within FeatureDefinitions.
	 * @var EbayTradingTypeFeatureDefinitionsType
	 */
	public $FeatureDefinitions;
	/**
	 * Constructor
	 * @param string CategoryVersion
	 * @param dateTime UpdateTime
	 * @param EbayTradingTypeCategoryFeatureType Category
	 * @param EbayTradingTypeSiteDefaultsType SiteDefaults
	 * @param EbayTradingTypeFeatureDefinitionsType FeatureDefinitions
	 * @return EbayTradingTypeGetCategoryFeaturesResponseType
	 */
	public function __construct($_CategoryVersion = null,$_UpdateTime = null,$_Category = null,$_SiteDefaults = null,$_FeatureDefinitions = null)
	{
		EbayTradingWsdlClass::__construct(array('CategoryVersion'=>$_CategoryVersion,'UpdateTime'=>$_UpdateTime,'Category'=>$_Category,'SiteDefaults'=>$_SiteDefaults,'FeatureDefinitions'=>$_FeatureDefinitions));
	}
	/**
	 * Set CategoryVersion
	 * @param string CategoryVersion
	 * @return string
	 */
	public function setCategoryVersion($_CategoryVersion)
	{
		return ($this->CategoryVersion = $_CategoryVersion);
	}
	/**
	 * Get CategoryVersion
	 * @return string
	 */
	public function getCategoryVersion()
	{
		return $this->CategoryVersion;
	}
	/**
	 * Set UpdateTime
	 * @param dateTime UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_UpdateTime)
	{
		return ($this->UpdateTime = $_UpdateTime);
	}
	/**
	 * Get UpdateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
	}
	/**
	 * Set Category
	 * @param CategoryFeatureType Category
	 * @return CategoryFeatureType
	 */
	public function setCategory($_Category)
	{
		return ($this->Category = $_Category);
	}
	/**
	 * Get Category
	 * @return EbayTradingTypeCategoryFeatureType
	 */
	public function getCategory()
	{
		return $this->Category;
	}
	/**
	 * Set SiteDefaults
	 * @param SiteDefaultsType SiteDefaults
	 * @return SiteDefaultsType
	 */
	public function setSiteDefaults($_SiteDefaults)
	{
		return ($this->SiteDefaults = $_SiteDefaults);
	}
	/**
	 * Get SiteDefaults
	 * @return EbayTradingTypeSiteDefaultsType
	 */
	public function getSiteDefaults()
	{
		return $this->SiteDefaults;
	}
	/**
	 * Set FeatureDefinitions
	 * @param FeatureDefinitionsType FeatureDefinitions
	 * @return FeatureDefinitionsType
	 */
	public function setFeatureDefinitions($_FeatureDefinitions)
	{
		return ($this->FeatureDefinitions = $_FeatureDefinitions);
	}
	/**
	 * Get FeatureDefinitions
	 * @return EbayTradingTypeFeatureDefinitionsType
	 */
	public function getFeatureDefinitions()
	{
		return $this->FeatureDefinitions;
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