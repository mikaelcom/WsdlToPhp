<?php
/**
 * Class file for EbayTradingTypeGetCategorySpecificsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetCategorySpecificsResponseType
 * Documentation : Calls made form seller or buyer find out what the most relevant tags and values are for a given category
 * @date 04/07/2012
 */
class EbayTradingTypeGetCategorySpecificsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The Recommendations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Returned with request version 609 and higher. <br> <br> Contains the most popular Item Specifics, if any, for a category specified in the request, or contains information about whether the recommendations have changed for that category since the LastUpdateTime you requested. <br> <br> The most relevant Item Specifics (as determined by eBay) are returned first. In many cases, the values are returned in alphabetical order.<br> <br> This node returns empty (or it's not returned) for a category if there is no applicable data (such as when you request a parent category, a category that has no popular Item Specifics yet, or a duplicate category that was already returned). If you pass in the CategoryID and Name fields together, but no matching values are found for the name, eBay returns the name with no values (even if the name is not recommended).<br> <br> If GetCategoryFeatures indicates that custom Item Specifics are enabled for a leaf category, but GetCategorySpecifics doesn't return any recommendations for that category, the seller can still specify their own custom Item Specifics in that category.
	 * @var EbayTradingTypeRecommendationsType
	 */
	public $Recommendations;
	/**
	 * The TaskReferenceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Use TaskReferenceID and FileReferenceID as inputs to the downloadFile call in the eBay File Transfer API. That API lets you retrieve a single (bulk) GetCategorySpecifics response with all the Item Specifics recommendations available for the requested site ID. (The downloadFile call downloads a .zip file as an attachment.)<br> <br> Only returned when CategorySpecificsFileInfo is passed in the request.
	 * @var string
	 */
	public $TaskReferenceID;
	/**
	 * The FileReferenceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Use TaskReferenceID and FileReferenceID as inputs to the downloadFile call in the eBay File Transfer API. That API lets you retrieve a single (bulk) GetCategorySpecifics response with all the Item Specifics recommendations available for the requested site ID. (The downloadFile call downloads a .zip file as an attachment.)<br> <br> Only returned when CategorySpecificsFileInfo is passed in the request.
	 * @var string
	 */
	public $FileReferenceID;
	/**
	 * Constructor
	 * @param EbayTradingTypeRecommendationsType Recommendations
	 * @param string TaskReferenceID
	 * @param string FileReferenceID
	 * @return EbayTradingTypeGetCategorySpecificsResponseType
	 */
	public function __construct($_Recommendations = null,$_TaskReferenceID = null,$_FileReferenceID = null)
	{
		EbayTradingWsdlClass::__construct(array('Recommendations'=>$_Recommendations,'TaskReferenceID'=>$_TaskReferenceID,'FileReferenceID'=>$_FileReferenceID));
	}
	/**
	 * Set Recommendations
	 * @param RecommendationsType Recommendations
	 * @return RecommendationsType
	 */
	public function setRecommendations($_Recommendations)
	{
		return ($this->Recommendations = $_Recommendations);
	}
	/**
	 * Get Recommendations
	 * @return EbayTradingTypeRecommendationsType
	 */
	public function getRecommendations()
	{
		return $this->Recommendations;
	}
	/**
	 * Set TaskReferenceID
	 * @param string TaskReferenceID
	 * @return string
	 */
	public function setTaskReferenceID($_TaskReferenceID)
	{
		return ($this->TaskReferenceID = $_TaskReferenceID);
	}
	/**
	 * Get TaskReferenceID
	 * @return string
	 */
	public function getTaskReferenceID()
	{
		return $this->TaskReferenceID;
	}
	/**
	 * Set FileReferenceID
	 * @param string FileReferenceID
	 * @return string
	 */
	public function setFileReferenceID($_FileReferenceID)
	{
		return ($this->FileReferenceID = $_FileReferenceID);
	}
	/**
	 * Get FileReferenceID
	 * @return string
	 */
	public function getFileReferenceID()
	{
		return $this->FileReferenceID;
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