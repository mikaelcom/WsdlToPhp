<?php
/**
 * Class file for EbayTradingTypeWantItNowPostType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeWantItNowPostType
 * Documentation : Contains the data describing a single Want It Now post. Buyers create Want It Now posts to communicate to sellers specific requirements for items they would like to buy.
 * @date 04/07/2012
 */
class EbayTradingTypeWantItNowPostType extends EbayTradingWsdlClass
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the category in which the Want It Now post is listed.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 * @var string
	 */
	public $Description;
	/**
	 * The PostID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID that uniquely identifies a Want It Now post.
	 * @var EbayTradingTypeItemIDType
	 */
	public $PostID;
	/**
	 * The Site
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Site where the Want It Now post is listed.
	 * @var EbayTradingTypeSiteCodeType
	 */
	public $Site;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date and time (in GMT) that a Want It Now post was added.
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The ResponseCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of responses for a Want It Now post. Sellers respond to a Want It Now post by submitting an item number, so each response corresponds to an item listing.
	 * @var int
	 */
	public $ResponseCount;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Title of a Want It Now post.
	 * @var string
	 */
	public $Title;
	/**
	 * Constructor
	 * @param string CategoryID
	 * @param string Description
	 * @param EbayTradingTypeItemIDType PostID
	 * @param EbayTradingTypeSiteCodeType Site
	 * @param dateTime StartTime
	 * @param int ResponseCount
	 * @param string Title
	 * @return EbayTradingTypeWantItNowPostType
	 */
	public function __construct($_CategoryID = null,$_Description = null,$_PostID = null,$_Site = null,$_StartTime = null,$_ResponseCount = null,$_Title = null)
	{
		parent::__construct(array('CategoryID'=>$_CategoryID,'Description'=>$_Description,'PostID'=>$_PostID,'Site'=>$_Site,'StartTime'=>$_StartTime,'ResponseCount'=>$_ResponseCount,'Title'=>$_Title));
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
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
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
	 * Set Site
	 * @param SiteCodeType Site
	 * @return SiteCodeType
	 */
	public function setSite($_Site)
	{
		return ($this->Site = EbayTradingTypeSiteCodeType::valueIsValid($_Site)?$_Site:null);
	}
	/**
	 * Get Site
	 * @return EbayTradingTypeSiteCodeType
	 */
	public function getSite()
	{
		return $this->Site;
	}
	/**
	 * Set StartTime
	 * @param dateTime StartTime
	 * @return dateTime
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set ResponseCount
	 * @param int ResponseCount
	 * @return int
	 */
	public function setResponseCount($_ResponseCount)
	{
		return ($this->ResponseCount = $_ResponseCount);
	}
	/**
	 * Get ResponseCount
	 * @return int
	 */
	public function getResponseCount()
	{
		return $this->ResponseCount;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
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