<?php
/**
 * Class file for EbayTradingTypeGetCategorySpecificsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetCategorySpecificsRequestType
 * Documentation : Returns the most popular custom Item Specific names and values for each leaf category you request.
 * @date 04/07/2012
 */
class EbayTradingTypeGetCategorySpecificsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A leaf-level eBay category ID. This call retrieves recommended Item Specifics (if any) for each leaf category you specify. (The call returns no results for a parent category.) To determine which leaf categories support listing with custom Item Specifics, use GetCategoryFeatures. <br><br> <span class="tablenote"><b>Note:</b> This call may return recommendations for categories that don't support listing with custom Item Specifics. That is, the presence of recommendations for a category does not necessarily mean that AddItem supports custom Item Specifics for that category and site. </span> <br><br> The request requires either CategoryID, CategorySpecfics.CategoryID, or CategorySpecificsFileInfo (or the call returns an error). CategoryID and CategorySpecific.CategoryID can both be used in the same request. (CategorySpecific offers more options to control the response.) Some input fields, such as IncludeConfidence, only work when CategoryID or CategorySpecfics.CategoryID is specified. <br><br> You can specify multiple leaf categories, but more categories can result in longer response times. If your request times out, specify fewer IDs. If you specify the same ID twice, we use the first instance.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The LastUpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Causes the recommendation engine to check whether the list of popular Item Specifics for each specified category has changed since this date and time. If specified, this call returns no Item Specifics; it only returns whether the data has changed for any of the requested categories.<br> <br> Typically, you pass in the Timestamp that was returned the last time you refreshed the list of names and values for the same categories. If the Updated flag returns true for any categories in the response, call GetCategorySpecifics again for those categories to get the latest names and values. (As downloading all the data may affect your application's performance, it may help to only download Item Specifics for a category if they have changed since you last checked.)
	 * @var dateTime
	 */
	public $LastUpdateTime;
	/**
	 * The MaxNames
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Maximum number of Item Specifics to return per category (where each Item Specific is identified by a unique name within the category). Use this to retrieve fewer results per category. For example, if you only want up to 2 per category (the top 2 most popular names), specify 2.
	 * @var int
	 */
	public $MaxNames;
	/**
	 * The MaxValuesPerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Maximum number of values to retrieve per item specific. The best practice for using this field depends on your use case. For example, if you want all possible values (such as all brands and sizes in a clothing category), then specify a very large number. (This is recommended in most cases.) If you only want the most popular value (like the most popular color), then specify a small number.
	 * @var int
	 */
	public $MaxValuesPerName;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of one Item Specific name to find values for. Use this if you want to find out whether a name that the seller provided has recommended values. If you specify multiple leaf categories in the request, the recommendation engine returns all matching names and values it finds for each of those categories. At the time of this writing, this value is case-sensitive. (Wildcards are not supported.)<br> <br> Name and CategorySpecific.ItemSpecific can be used in the request. (If you plan to only use one or the other in your application, you should use ItemSpecific, as it may offer more options in the future.)
	 * @var string
	 */
	public $Name;
	/**
	 * The CategorySpecific
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Applicable with request version 609 and higher. (This does not retrieve data at all if your request version is lower than 609.) Contains a leaf category for which you want recommended Item Specifics, and (optionally) names and values to help you refine the recommendations. You can specify multiple categories (but more categories can result in longer response times). If you specify the same category twice, we use the first instance.<br> <br> Depending on how many recommendations are found, your request may time out if you specify too many categories. (Typically, you can download recommendations for about 275 categories at a time.)<br> <br> CategoryID and CategorySpecific.CategoryID can be used in the request. (If you plan to only use one or the other in your application, you should use CategorySpecific, as it may offer more options in the future.)
	 * @var EbayTradingTypeCategoryItemSpecificsType
	 */
	public $CategorySpecific;
	/**
	 * The ExcludeRelationships
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the Relationship node is not returned for any recommendations. Relationship recommendations tell you whether an Item Specific value has a logical dependency another Item Specific.<br> <br> For example, in a clothing category, Size Type could be recommended as a parent of Size, because Size=Small would mean something different to buyers depending on whether Size Type=Petite or Size Type=Plus.<br> <br> In general, it is a good idea to retrieve and use relationship recommendations, as this data can help buyers find the items they want more easily.
	 * @var boolean
	 */
	public $ExcludeRelationships;
	/**
	 * The IncludeConfidence
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, returns eBay's level of confidence in the popularity of each name and value for the specified category. Some sellers may find this useful when choosing whether to use eBay's recommendation or their own name or value.<br> <br> Requires CategoryID to also be passed in.<br> <br> If you try to use this with CategorySpecificsFileInfo but without CategoryID, the request fails and no TaskReferenceID or FileReferenceID is returned.
	 * @var boolean
	 */
	public $IncludeConfidence;
	/**
	 * The CategorySpecificsFileInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the response includes FileReferenceID and TaskReferenceID. Use these IDs as inputs to the downloadFile call in the eBay File Transfer API. That API lets you retrieve a single (bulk) GetCategorySpecifics response with all the Item Specifics recommendations available for the requested site ID. (The downloadFile call downloads a .zip file as an attachment.)<br> <br> Either CategorySpecificsFileInfo or a CategoryID is required (or you can specify both). <br> <br> <span class="tablenote"><b>Note:</b> You can use the File Transfer API without using or learning about the Bulk Data Exchange API or other Large Merchant Services APIs. </span> <br>
	 * @var boolean
	 */
	public $CategorySpecificsFileInfo;
	/**
	 * Constructor
	 * @param string CategoryID
	 * @param dateTime LastUpdateTime
	 * @param int MaxNames
	 * @param int MaxValuesPerName
	 * @param string Name
	 * @param EbayTradingTypeCategoryItemSpecificsType CategorySpecific
	 * @param boolean ExcludeRelationships
	 * @param boolean IncludeConfidence
	 * @param boolean CategorySpecificsFileInfo
	 * @return EbayTradingTypeGetCategorySpecificsRequestType
	 */
	public function __construct($_CategoryID = null,$_LastUpdateTime = null,$_MaxNames = null,$_MaxValuesPerName = null,$_Name = null,$_CategorySpecific = null,$_ExcludeRelationships = null,$_IncludeConfidence = null,$_CategorySpecificsFileInfo = null)
	{
		EbayTradingWsdlClass::__construct(array('CategoryID'=>$_CategoryID,'LastUpdateTime'=>$_LastUpdateTime,'MaxNames'=>$_MaxNames,'MaxValuesPerName'=>$_MaxValuesPerName,'Name'=>$_Name,'CategorySpecific'=>$_CategorySpecific,'ExcludeRelationships'=>$_ExcludeRelationships,'IncludeConfidence'=>$_IncludeConfidence,'CategorySpecificsFileInfo'=>$_CategorySpecificsFileInfo));
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
	 * Set LastUpdateTime
	 * @param dateTime LastUpdateTime
	 * @return dateTime
	 */
	public function setLastUpdateTime($_LastUpdateTime)
	{
		return ($this->LastUpdateTime = $_LastUpdateTime);
	}
	/**
	 * Get LastUpdateTime
	 * @return dateTime
	 */
	public function getLastUpdateTime()
	{
		return $this->LastUpdateTime;
	}
	/**
	 * Set MaxNames
	 * @param int MaxNames
	 * @return int
	 */
	public function setMaxNames($_MaxNames)
	{
		return ($this->MaxNames = $_MaxNames);
	}
	/**
	 * Get MaxNames
	 * @return int
	 */
	public function getMaxNames()
	{
		return $this->MaxNames;
	}
	/**
	 * Set MaxValuesPerName
	 * @param int MaxValuesPerName
	 * @return int
	 */
	public function setMaxValuesPerName($_MaxValuesPerName)
	{
		return ($this->MaxValuesPerName = $_MaxValuesPerName);
	}
	/**
	 * Get MaxValuesPerName
	 * @return int
	 */
	public function getMaxValuesPerName()
	{
		return $this->MaxValuesPerName;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set CategorySpecific
	 * @param CategoryItemSpecificsType CategorySpecific
	 * @return CategoryItemSpecificsType
	 */
	public function setCategorySpecific($_CategorySpecific)
	{
		return ($this->CategorySpecific = $_CategorySpecific);
	}
	/**
	 * Get CategorySpecific
	 * @return EbayTradingTypeCategoryItemSpecificsType
	 */
	public function getCategorySpecific()
	{
		return $this->CategorySpecific;
	}
	/**
	 * Set ExcludeRelationships
	 * @param boolean ExcludeRelationships
	 * @return boolean
	 */
	public function setExcludeRelationships($_ExcludeRelationships)
	{
		return ($this->ExcludeRelationships = $_ExcludeRelationships);
	}
	/**
	 * Get ExcludeRelationships
	 * @return boolean
	 */
	public function getExcludeRelationships()
	{
		return $this->ExcludeRelationships;
	}
	/**
	 * Set IncludeConfidence
	 * @param boolean IncludeConfidence
	 * @return boolean
	 */
	public function setIncludeConfidence($_IncludeConfidence)
	{
		return ($this->IncludeConfidence = $_IncludeConfidence);
	}
	/**
	 * Get IncludeConfidence
	 * @return boolean
	 */
	public function getIncludeConfidence()
	{
		return $this->IncludeConfidence;
	}
	/**
	 * Set CategorySpecificsFileInfo
	 * @param boolean CategorySpecificsFileInfo
	 * @return boolean
	 */
	public function setCategorySpecificsFileInfo($_CategorySpecificsFileInfo)
	{
		return ($this->CategorySpecificsFileInfo = $_CategorySpecificsFileInfo);
	}
	/**
	 * Get CategorySpecificsFileInfo
	 * @return boolean
	 */
	public function getCategorySpecificsFileInfo()
	{
		return $this->CategorySpecificsFileInfo;
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