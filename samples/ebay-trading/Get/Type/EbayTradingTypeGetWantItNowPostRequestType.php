<?php
/**
 * Class file for EbayTradingTypeGetWantItNowPostRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetWantItNowPostRequestType
 * Documentation : Retrieves data for a specific, active Want It Now post identified by a post ID. The response includes the following fields: CategoryID, Description, PostID, Site, StartTime, ResponseCount, and Title. Although GetWantItNowSearchResults returns most of this information, only GetWantItNowPost returns Description for a post.
 * @date 04/07/2012
 */
class EbayTradingTypeGetWantItNowPostRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The PostID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the post ID that uniquely identifies the Want It Now post for which to retrieve the data. PostID is a required input. PostID is unique across all eBay sites.
	 * @var EbayTradingTypeItemIDType
	 */
	public $PostID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType PostID
	 * @return EbayTradingTypeGetWantItNowPostRequestType
	 */
	public function __construct($_PostID = null)
	{
		EbayTradingWsdlClass::__construct(array('PostID'=>$_PostID));
	}
	/**
	 * Set PostID
	 * @param ItemIDType PostID
	 * @return ItemIDType
	 */
	public function setPostID($_PostID)
	{
		return ($this->PostID = EbayTradingTypeItemIDType::valueIsValid($_PostID)?$_PostID:null);
	}
	/**
	 * Get PostID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getPostID()
	{
		return $this->PostID;
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