<?php
/**
 * Class file for EbayTradingTypeSellerAccountDashboardType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerAccountDashboardType
 * Documentation : Container for fields related to seller account.
 * @date 04/07/2012
 */
class EbayTradingTypeSellerAccountDashboardType extends EbayTradingWsdlClass
{
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates your account status. This helps you understand if you are making timely payments or if your account is at risk of restrictions because of late payments. For more details about your account, you can go to your Seller Account page on the eBay site (login to My eBay), or you can call GetAccount.
	 * @var EbayTradingTypeSellerAccountStatusCodeType
	 */
	public $Status;
	/**
	 * The Alert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A message to help you understand your account status. Not returned if there are no outstanding alerts.
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
	 * @param EbayTradingTypeSellerAccountStatusCodeType Status
	 * @param EbayTradingTypeSellerDashboardAlertType Alert
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerAccountDashboardType
	 */
	public function __construct($_Status = null,$_Alert = null,$_any = null)
	{
		parent::__construct(array('Status'=>$_Status,'Alert'=>$_Alert,'any'=>$_any));
	}
	/**
	 * Set Status
	 * @param SellerAccountStatusCodeType Status
	 * @return SellerAccountStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeSellerAccountStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeSellerAccountStatusCodeType
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