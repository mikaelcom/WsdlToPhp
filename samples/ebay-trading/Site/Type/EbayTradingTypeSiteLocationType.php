<?php
/**
 * Class file for EbayTradingTypeSiteLocationType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSiteLocationType
 * Documentation : Contains the data that defines a site-based filter (used when searching for items and filtering the search result set).
 * @date 04/07/2012
 */
class EbayTradingTypeSiteLocationType extends EbayTradingWsdlClass
{
	/**
	 * The SiteID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the criteria for filtering search results by site, where site is determined by the site ID in the SOAP URL or, for Unified Schema XML requests, X-EBAY-API-SITEID HTTP Header.
	 * @var EbayTradingTypeSiteIDFilterCodeType
	 */
	public $SiteID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSiteIDFilterCodeType SiteID
	 * @param DOMDocument any
	 * @return EbayTradingTypeSiteLocationType
	 */
	public function __construct($_SiteID = null,$_any = null)
	{
		parent::__construct(array('SiteID'=>$_SiteID,'any'=>$_any));
	}
	/**
	 * Set SiteID
	 * @param SiteIDFilterCodeType SiteID
	 * @return SiteIDFilterCodeType
	 */
	public function setSiteID($_SiteID)
	{
		return ($this->SiteID = EbayTradingTypeSiteIDFilterCodeType::valueIsValid($_SiteID)?$_SiteID:null);
	}
	/**
	 * Get SiteID
	 * @return EbayTradingTypeSiteIDFilterCodeType
	 */
	public function getSiteID()
	{
		return $this->SiteID;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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