<?php
/**
 * Class file for AmazonAlexaTypeAlexa
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeAlexa
 * @date 10/07/2012
 */
class AmazonAlexaTypeAlexa extends AmazonAlexaWsdlClass
{
	/**
	 * The Request
	 * @var AmazonAlexaTypeRequestType
	 */
	public $Request;
	/**
	 * The CategoryBrowse
	 * @var AmazonAlexaTypeCategoryBrowseType
	 */
	public $CategoryBrowse;
	/**
	 * The CategoryListings
	 * @var AmazonAlexaTypeCategoryListingsType
	 */
	public $CategoryListings;
	/**
	 * The ContactInfo
	 * @var AmazonAlexaTypeContactInfoType
	 */
	public $ContactInfo;
	/**
	 * The ContentData
	 * @var AmazonAlexaTypeContentDataType
	 */
	public $ContentData;
	/**
	 * The CrawlData
	 * @var AmazonAlexaTypeCrawlType
	 */
	public $CrawlData;
	/**
	 * The Related
	 * @var AmazonAlexaTypeRelatedType
	 */
	public $Related;
	/**
	 * The SitesLinkingIn
	 * @var AmazonAlexaTypeSitesLinkingInType
	 */
	public $SitesLinkingIn;
	/**
	 * The TrafficData
	 * @var AmazonAlexaTypeTrafficDataType
	 */
	public $TrafficData;
	/**
	 * The TrafficHistory
	 * @var AmazonAlexaTypeTrafficHistoryType
	 */
	public $TrafficHistory;
	/**
	 * The UniqueId
	 * @var token
	 */
	public $UniqueId;
	/**
	 * The WebMapData
	 * @var AmazonAlexaTypeWebMapData
	 */
	public $WebMapData;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeRequestType Request
	 * @param AmazonAlexaTypeCategoryBrowseType CategoryBrowse
	 * @param AmazonAlexaTypeCategoryListingsType CategoryListings
	 * @param AmazonAlexaTypeContactInfoType ContactInfo
	 * @param AmazonAlexaTypeContentDataType ContentData
	 * @param AmazonAlexaTypeCrawlType CrawlData
	 * @param AmazonAlexaTypeRelatedType Related
	 * @param AmazonAlexaTypeSitesLinkingInType SitesLinkingIn
	 * @param AmazonAlexaTypeTrafficDataType TrafficData
	 * @param AmazonAlexaTypeTrafficHistoryType TrafficHistory
	 * @param token UniqueId
	 * @param AmazonAlexaTypeWebMapData WebMapData
	 * @return AmazonAlexaTypeAlexa
	 */
	public function __construct($_Request = null,$_CategoryBrowse = null,$_CategoryListings = null,$_ContactInfo = null,$_ContentData = null,$_CrawlData = null,$_Related = null,$_SitesLinkingIn = null,$_TrafficData = null,$_TrafficHistory = null,$_UniqueId = null,$_WebMapData = null)
	{
		parent::__construct(array('Request'=>$_Request,'CategoryBrowse'=>$_CategoryBrowse,'CategoryListings'=>$_CategoryListings,'ContactInfo'=>$_ContactInfo,'ContentData'=>$_ContentData,'CrawlData'=>$_CrawlData,'Related'=>$_Related,'SitesLinkingIn'=>$_SitesLinkingIn,'TrafficData'=>$_TrafficData,'TrafficHistory'=>$_TrafficHistory,'UniqueId'=>$_UniqueId,'WebMapData'=>$_WebMapData));
	}
	/**
	 * Set Request
	 * @param RequestType Request
	 * @return RequestType
	 */
	public function setRequest($_Request)
	{
		return ($this->Request = $_Request);
	}
	/**
	 * Get Request
	 * @return AmazonAlexaTypeRequestType
	 */
	public function getRequest()
	{
		return $this->Request;
	}
	/**
	 * Set CategoryBrowse
	 * @param CategoryBrowseType CategoryBrowse
	 * @return CategoryBrowseType
	 */
	public function setCategoryBrowse($_CategoryBrowse)
	{
		return ($this->CategoryBrowse = $_CategoryBrowse);
	}
	/**
	 * Get CategoryBrowse
	 * @return AmazonAlexaTypeCategoryBrowseType
	 */
	public function getCategoryBrowse()
	{
		return $this->CategoryBrowse;
	}
	/**
	 * Set CategoryListings
	 * @param CategoryListingsType CategoryListings
	 * @return CategoryListingsType
	 */
	public function setCategoryListings($_CategoryListings)
	{
		return ($this->CategoryListings = $_CategoryListings);
	}
	/**
	 * Get CategoryListings
	 * @return AmazonAlexaTypeCategoryListingsType
	 */
	public function getCategoryListings()
	{
		return $this->CategoryListings;
	}
	/**
	 * Set ContactInfo
	 * @param ContactInfoType ContactInfo
	 * @return ContactInfoType
	 */
	public function setContactInfo($_ContactInfo)
	{
		return ($this->ContactInfo = $_ContactInfo);
	}
	/**
	 * Get ContactInfo
	 * @return AmazonAlexaTypeContactInfoType
	 */
	public function getContactInfo()
	{
		return $this->ContactInfo;
	}
	/**
	 * Set ContentData
	 * @param ContentDataType ContentData
	 * @return ContentDataType
	 */
	public function setContentData($_ContentData)
	{
		return ($this->ContentData = $_ContentData);
	}
	/**
	 * Get ContentData
	 * @return AmazonAlexaTypeContentDataType
	 */
	public function getContentData()
	{
		return $this->ContentData;
	}
	/**
	 * Set CrawlData
	 * @param CrawlType CrawlData
	 * @return CrawlType
	 */
	public function setCrawlData($_CrawlData)
	{
		return ($this->CrawlData = $_CrawlData);
	}
	/**
	 * Get CrawlData
	 * @return AmazonAlexaTypeCrawlType
	 */
	public function getCrawlData()
	{
		return $this->CrawlData;
	}
	/**
	 * Set Related
	 * @param RelatedType Related
	 * @return RelatedType
	 */
	public function setRelated($_Related)
	{
		return ($this->Related = $_Related);
	}
	/**
	 * Get Related
	 * @return AmazonAlexaTypeRelatedType
	 */
	public function getRelated()
	{
		return $this->Related;
	}
	/**
	 * Set SitesLinkingIn
	 * @param SitesLinkingInType SitesLinkingIn
	 * @return SitesLinkingInType
	 */
	public function setSitesLinkingIn($_SitesLinkingIn)
	{
		return ($this->SitesLinkingIn = $_SitesLinkingIn);
	}
	/**
	 * Get SitesLinkingIn
	 * @return AmazonAlexaTypeSitesLinkingInType
	 */
	public function getSitesLinkingIn()
	{
		return $this->SitesLinkingIn;
	}
	/**
	 * Set TrafficData
	 * @param TrafficDataType TrafficData
	 * @return TrafficDataType
	 */
	public function setTrafficData($_TrafficData)
	{
		return ($this->TrafficData = $_TrafficData);
	}
	/**
	 * Get TrafficData
	 * @return AmazonAlexaTypeTrafficDataType
	 */
	public function getTrafficData()
	{
		return $this->TrafficData;
	}
	/**
	 * Set TrafficHistory
	 * @param TrafficHistoryType TrafficHistory
	 * @return TrafficHistoryType
	 */
	public function setTrafficHistory($_TrafficHistory)
	{
		return ($this->TrafficHistory = $_TrafficHistory);
	}
	/**
	 * Get TrafficHistory
	 * @return AmazonAlexaTypeTrafficHistoryType
	 */
	public function getTrafficHistory()
	{
		return $this->TrafficHistory;
	}
	/**
	 * Set UniqueId
	 * @param token UniqueId
	 * @return token
	 */
	public function setUniqueId($_UniqueId)
	{
		return ($this->UniqueId = $_UniqueId);
	}
	/**
	 * Get UniqueId
	 * @return token
	 */
	public function getUniqueId()
	{
		return $this->UniqueId;
	}
	/**
	 * Set WebMapData
	 * @param WebMapData WebMapData
	 * @return WebMapData
	 */
	public function setWebMapData($_WebMapData)
	{
		return ($this->WebMapData = $_WebMapData);
	}
	/**
	 * Get WebMapData
	 * @return AmazonAlexaTypeWebMapData
	 */
	public function getWebMapData()
	{
		return $this->WebMapData;
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