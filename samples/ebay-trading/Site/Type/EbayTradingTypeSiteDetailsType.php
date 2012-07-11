<?php
/**
 * Class file for EbayTradingTypeSiteDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSiteDetailsType
 * Documentation : Details about a specific site.
 * @date 04/07/2012
 */
class EbayTradingTypeSiteDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The Site
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Short name that identifies an eBay site. Usually, an eBay site is associated with a particular country or region (e.g., US or Belgium_French). Specialty sites (e.g., eBay Stores) use the same site ID as their associated main eBay site. The US eBay Motors site is an exception to this convention.<br> <dl> <dh><strong>Related fields:</strong></dh> <dd>Item.Site in AddItem</dd> <dd>User.Site in GetUser</dd> </dl>
	 * @var EbayTradingTypeSiteCodeType
	 */
	public $Site;
	/**
	 * The SiteID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Numeric identifier for an eBay site. If you are using the SOAP API, you use numeric site IDs in the request URL. If you are using the XML API, you use numeric site IDs in the X-EBAY-API-SITEID header.
	 * @var int
	 */
	public $SiteID;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSiteCodeType Site
	 * @param int SiteID
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeSiteDetailsType
	 */
	public function __construct($_Site = null,$_SiteID = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('Site'=>$_Site,'SiteID'=>$_SiteID,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
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
	 * Set SiteID
	 * @param int SiteID
	 * @return int
	 */
	public function setSiteID($_SiteID)
	{
		return ($this->SiteID = $_SiteID);
	}
	/**
	 * Get SiteID
	 * @return int
	 */
	public function getSiteID()
	{
		return $this->SiteID;
	}
	/**
	 * Set DetailVersion
	 * @param string DetailVersion
	 * @return string
	 */
	public function setDetailVersion($_DetailVersion)
	{
		return ($this->DetailVersion = $_DetailVersion);
	}
	/**
	 * Get DetailVersion
	 * @return string
	 */
	public function getDetailVersion()
	{
		return $this->DetailVersion;
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