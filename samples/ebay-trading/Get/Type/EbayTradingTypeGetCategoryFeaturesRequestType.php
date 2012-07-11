<?php
/**
 * Class file for EbayTradingTypeGetCategoryFeaturesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetCategoryFeaturesRequestType
 * Documentation : Returns information about the features that are applicable to different categories, such as listing durations, shipping term requirements, and Best Offer support.
 * @date 04/07/2012
 */
class EbayTradingTypeGetCategoryFeaturesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the category for which you want to retrieve the feature settings. <br><br> Specify a CategoryID, set DetailLevel to ReturnAll, and set ViewAllNodes to true to return the default site settings, the overrides for the specified category, plus all the child categories that have overrides on the features they inherit. <br><br> If you also set AllFeaturesForCategory to true, eBay returns the site defaults, plus all the settings for the specified category. Child category information is not returned in this case. <br><br> If CategoryID is not specified, eBay returns the feature settings for the site. To return details on all categories that have overrides on the properties they inherit, set DetailLevel to ReturnAll, and set ViewAllNodes to true. If you also set AllFeaturesForCategory to true, eBay returns only the site defaults with no child category information.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The LevelLimit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A level of depth in the category hierarchy. Retrieves all category nodes with a CategoryLevel less than or equal to the LevelLimit value.
	 * @var int
	 */
	public $LevelLimit;
	/**
	 * The ViewAllNodes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : You must set DetailLevel to ReturnAll in order to correctly populate the response when you set ViewAllNodes to true. In this case, eBay returns the site defaults along with all the categories that override the feature settings they inherit. Here, each Category container shows only the features that it has overridden from its parent node. <br><br> If you also specify a CategoryID, eBay returns the details for that category, along with containers for each of its child categories that have feature overrides. <br><br> Note that if ViewAllNodes is set to false (the default) and DetailLevel is set to ReturnAll, eBay returns only the leaf categories that have features that override the settings they inherit. In this case, the call will not return leaf categories that do not have overrides.
	 * @var boolean
	 */
	public $ViewAllNodes;
	/**
	 * The FeatureID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Retrieves data related to the specified feature setting only. If no feature IDs are specified, the call retrieves data for all features, as applicable to the other call settings.
	 * @var EbayTradingTypeFeatureIDCodeType
	 */
	public $FeatureID;
	/**
	 * The AllFeaturesForCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Use this switch to view all of the feature settings for a specific category. All feature settings are returned, regardless of the site default settings. This element works in conjunction with CategoryID--refer to the notes for that element for more details. <br><br> If you also set FeatureID, eBay returns the status of the specified features only, for the specified category.
	 * @var boolean
	 */
	public $AllFeaturesForCategory;
	/**
	 * Constructor
	 * @param string CategoryID
	 * @param int LevelLimit
	 * @param boolean ViewAllNodes
	 * @param EbayTradingTypeFeatureIDCodeType FeatureID
	 * @param boolean AllFeaturesForCategory
	 * @return EbayTradingTypeGetCategoryFeaturesRequestType
	 */
	public function __construct($_CategoryID = null,$_LevelLimit = null,$_ViewAllNodes = null,$_FeatureID = null,$_AllFeaturesForCategory = null)
	{
		EbayTradingWsdlClass::__construct(array('CategoryID'=>$_CategoryID,'LevelLimit'=>$_LevelLimit,'ViewAllNodes'=>$_ViewAllNodes,'FeatureID'=>$_FeatureID,'AllFeaturesForCategory'=>$_AllFeaturesForCategory));
	}
	/**
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set LevelLimit
	 * @param int LevelLimit
	 * @return int
	 */
	public function setLevelLimit($_LevelLimit)
	{
		return ($this->LevelLimit = $_LevelLimit);
	}
	/**
	 * Get LevelLimit
	 * @return int
	 */
	public function getLevelLimit()
	{
		return $this->LevelLimit;
	}
	/**
	 * Set ViewAllNodes
	 * @param boolean ViewAllNodes
	 * @return boolean
	 */
	public function setViewAllNodes($_ViewAllNodes)
	{
		return ($this->ViewAllNodes = $_ViewAllNodes);
	}
	/**
	 * Get ViewAllNodes
	 * @return boolean
	 */
	public function getViewAllNodes()
	{
		return $this->ViewAllNodes;
	}
	/**
	 * Set FeatureID
	 * @param FeatureIDCodeType FeatureID
	 * @return FeatureIDCodeType
	 */
	public function setFeatureID($_FeatureID)
	{
		return ($this->FeatureID = EbayTradingTypeFeatureIDCodeType::valueIsValid($_FeatureID)?$_FeatureID:null);
	}
	/**
	 * Get FeatureID
	 * @return EbayTradingTypeFeatureIDCodeType
	 */
	public function getFeatureID()
	{
		return $this->FeatureID;
	}
	/**
	 * Set AllFeaturesForCategory
	 * @param boolean AllFeaturesForCategory
	 * @return boolean
	 */
	public function setAllFeaturesForCategory($_AllFeaturesForCategory)
	{
		return ($this->AllFeaturesForCategory = $_AllFeaturesForCategory);
	}
	/**
	 * Get AllFeaturesForCategory
	 * @return boolean
	 */
	public function getAllFeaturesForCategory()
	{
		return $this->AllFeaturesForCategory;
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