<?php
/**
 * Class file for EbayTradingTypeSearchStandingDashboardType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSearchStandingDashboardType
 * Documentation : Provides information about the visibility level you've earned for your eBay listings. When you have a better search standing, your listings may receive higher placement in Best Match search results.
 * @date 04/07/2012
 */
class EbayTradingTypeSearchStandingDashboardType extends EbayTradingWsdlClass
{
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Your earned search standing status. To qualify for a Standard or Raised search standing, make sure your ratings meet or exceed the required minimum levels in buyer satisfaction (see BuyerSatisfaction.Status in this call) and detailed seller ratings (DSRs). See GetFeedback for details.
	 * @var EbayTradingTypeSearchStandingStatusCodeType
	 */
	public $Status;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSearchStandingStatusCodeType Status
	 * @param DOMDocument any
	 * @return EbayTradingTypeSearchStandingDashboardType
	 */
	public function __construct($_Status = null,$_any = null)
	{
		parent::__construct(array('Status'=>$_Status,'any'=>$_any));
	}
	/**
	 * Set Status
	 * @param SearchStandingStatusCodeType Status
	 * @return SearchStandingStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeSearchStandingStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeSearchStandingStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
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