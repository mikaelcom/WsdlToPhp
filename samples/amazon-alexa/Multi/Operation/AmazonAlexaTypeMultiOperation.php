<?php
/**
 * Class file for AmazonAlexaTypeMultiOperation
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeMultiOperation
 * @date 10/07/2012
 */
class AmazonAlexaTypeMultiOperation extends AmazonAlexaWsdlClass
{
	/**
	 * The CategoryBrowse
	 * @var AmazonAlexaTypeCategoryBrowse
	 */
	public $CategoryBrowse;
	/**
	 * The CategoryListings
	 * @var AmazonAlexaTypeCategoryListings
	 */
	public $CategoryListings;
	/**
	 * The Crawl
	 * @var AmazonAlexaTypeCrawl
	 */
	public $Crawl;
	/**
	 * The SitesLinkingIn
	 * @var AmazonAlexaTypeSitesLinkingIn
	 */
	public $SitesLinkingIn;
	/**
	 * The TrafficHistory
	 * @var AmazonAlexaTypeTrafficHistory
	 */
	public $TrafficHistory;
	/**
	 * The UrlInfo
	 * @var AmazonAlexaTypeUrlInfo
	 */
	public $UrlInfo;
	/**
	 * The WebMap
	 * @var AmazonAlexaTypeWebMap
	 */
	public $WebMap;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeCategoryBrowse CategoryBrowse
	 * @param AmazonAlexaTypeCategoryListings CategoryListings
	 * @param AmazonAlexaTypeCrawl Crawl
	 * @param AmazonAlexaTypeSitesLinkingIn SitesLinkingIn
	 * @param AmazonAlexaTypeTrafficHistory TrafficHistory
	 * @param AmazonAlexaTypeUrlInfo UrlInfo
	 * @param AmazonAlexaTypeWebMap WebMap
	 * @return AmazonAlexaTypeMultiOperation
	 */
	public function __construct($_CategoryBrowse = null,$_CategoryListings = null,$_Crawl = null,$_SitesLinkingIn = null,$_TrafficHistory = null,$_UrlInfo = null,$_WebMap = null)
	{
		parent::__construct(array('CategoryBrowse'=>$_CategoryBrowse,'CategoryListings'=>$_CategoryListings,'Crawl'=>$_Crawl,'SitesLinkingIn'=>$_SitesLinkingIn,'TrafficHistory'=>$_TrafficHistory,'UrlInfo'=>$_UrlInfo,'WebMap'=>$_WebMap));
	}
	/**
	 * Set CategoryBrowse
	 * @param CategoryBrowse CategoryBrowse
	 * @return CategoryBrowse
	 */
	public function setCategoryBrowse($_CategoryBrowse)
	{
		return ($this->CategoryBrowse = $_CategoryBrowse);
	}
	/**
	 * Get CategoryBrowse
	 * @return AmazonAlexaTypeCategoryBrowse
	 */
	public function getCategoryBrowse()
	{
		return $this->CategoryBrowse;
	}
	/**
	 * Set CategoryListings
	 * @param CategoryListings CategoryListings
	 * @return CategoryListings
	 */
	public function setCategoryListings($_CategoryListings)
	{
		return ($this->CategoryListings = $_CategoryListings);
	}
	/**
	 * Get CategoryListings
	 * @return AmazonAlexaTypeCategoryListings
	 */
	public function getCategoryListings()
	{
		return $this->CategoryListings;
	}
	/**
	 * Set Crawl
	 * @param Crawl Crawl
	 * @return Crawl
	 */
	public function setCrawl($_Crawl)
	{
		return ($this->Crawl = $_Crawl);
	}
	/**
	 * Get Crawl
	 * @return AmazonAlexaTypeCrawl
	 */
	public function getCrawl()
	{
		return $this->Crawl;
	}
	/**
	 * Set SitesLinkingIn
	 * @param SitesLinkingIn SitesLinkingIn
	 * @return SitesLinkingIn
	 */
	public function setSitesLinkingIn($_SitesLinkingIn)
	{
		return ($this->SitesLinkingIn = $_SitesLinkingIn);
	}
	/**
	 * Get SitesLinkingIn
	 * @return AmazonAlexaTypeSitesLinkingIn
	 */
	public function getSitesLinkingIn()
	{
		return $this->SitesLinkingIn;
	}
	/**
	 * Set TrafficHistory
	 * @param TrafficHistory TrafficHistory
	 * @return TrafficHistory
	 */
	public function setTrafficHistory($_TrafficHistory)
	{
		return ($this->TrafficHistory = $_TrafficHistory);
	}
	/**
	 * Get TrafficHistory
	 * @return AmazonAlexaTypeTrafficHistory
	 */
	public function getTrafficHistory()
	{
		return $this->TrafficHistory;
	}
	/**
	 * Set UrlInfo
	 * @param UrlInfo UrlInfo
	 * @return UrlInfo
	 */
	public function setUrlInfo($_UrlInfo)
	{
		return ($this->UrlInfo = $_UrlInfo);
	}
	/**
	 * Get UrlInfo
	 * @return AmazonAlexaTypeUrlInfo
	 */
	public function getUrlInfo()
	{
		return $this->UrlInfo;
	}
	/**
	 * Set WebMap
	 * @param WebMap WebMap
	 * @return WebMap
	 */
	public function setWebMap($_WebMap)
	{
		return ($this->WebMap = $_WebMap);
	}
	/**
	 * Get WebMap
	 * @return AmazonAlexaTypeWebMap
	 */
	public function getWebMap()
	{
		return $this->WebMap;
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