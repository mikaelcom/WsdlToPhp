<?php
/**
 * Class file for EbayTradingTypePolicyComplianceDashboardType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePolicyComplianceDashboardType
 * Documentation : Container for fields related to policy compliance. Communicates the sellers current status in terms of risk of facing TnS action (i.e., warnings, cancelled listings, restrictions, suspension, and violations).
 * @date 04/07/2012
 */
class EbayTradingTypePolicyComplianceDashboardType extends EbayTradingWsdlClass
{
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Rating on how well you are following eBay's selling policies.
	 * @var EbayTradingTypePolicyComplianceStatusCodeType
	 */
	public $Status;
	/**
	 * The Alert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A message to help you understand your eBay policy compliance status.
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
	 * @param EbayTradingTypePolicyComplianceStatusCodeType Status
	 * @param EbayTradingTypeSellerDashboardAlertType Alert
	 * @param DOMDocument any
	 * @return EbayTradingTypePolicyComplianceDashboardType
	 */
	public function __construct($_Status = null,$_Alert = null,$_any = null)
	{
		parent::__construct(array('Status'=>$_Status,'Alert'=>$_Alert,'any'=>$_any));
	}
	/**
	 * Set Status
	 * @param PolicyComplianceStatusCodeType Status
	 * @return PolicyComplianceStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypePolicyComplianceStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypePolicyComplianceStatusCodeType
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