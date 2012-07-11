<?php
/**
 * Class file for EbayTradingTypePerformanceDashboardType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePerformanceDashboardType
 * Documentation : The performance status of the seller for each of the participating regions. The seller performance status is also listed on the associated Seller DashBoard.
 * @date 04/07/2012
 */
class EbayTradingTypePerformanceDashboardType extends EbayTradingWsdlClass
{
	/**
	 * The Site
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The eBay site(s) to which the associated performance status relates. <br /> A performance status is returned for three specific regions: US, UK/Ireland, and Germany/Switzerland/Austria. The Site field is repeated to show all sites in each region, if applicable.
	 * @var EbayTradingTypeSiteCodeType
	 */
	public $Site;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Performance rating of the seller for the associated eBay region. <br><br> A rating is given for all regions, even if the seller has not sold to all regions. Default values are as follows: US = AboveStandard; UK/Ireland = Standard, Germany/Switzerland/Austria = Standard. AboveStandard is returned for UK/Ireland and Germany/Switzerland/Austria for versions 653 and later.
	 * @var EbayTradingTypePerformanceStatusCodeType
	 */
	public $Status;
	/**
	 * The Alert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An informational or warning message pertaining to the seller. Alerts can be issued to denote seller status changes, account standings, or other types of messages related to the account. This field is returned only if the seller has been issued an alert on the respective eBay site.
	 * @var EbayTradingTypeSellerDashboardAlertType
	 */
	public $Alert;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSiteCodeType Site
	 * @param EbayTradingTypePerformanceStatusCodeType Status
	 * @param EbayTradingTypeSellerDashboardAlertType Alert
	 * @param DOMDocument any
	 * @return EbayTradingTypePerformanceDashboardType
	 */
	public function __construct($_Site = null,$_Status = null,$_Alert = null,$_any = null)
	{
		parent::__construct(array('Site'=>$_Site,'Status'=>$_Status,'Alert'=>$_Alert,'any'=>$_any));
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
	 * Set Status
	 * @param PerformanceStatusCodeType Status
	 * @return PerformanceStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypePerformanceStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypePerformanceStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Alert
	 * @param SellerDashboardAlertType Alert
	 * @return SellerDashboardAlertType
	 */
	public function setAlert($_Alert)
	{
		return ($this->Alert = $_Alert);
	}
	/**
	 * Get Alert
	 * @return EbayTradingTypeSellerDashboardAlertType
	 */
	public function getAlert()
	{
		return $this->Alert;
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