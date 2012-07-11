<?php
/**
 * Class file for EbayTradingTypePowerSellerDashboardType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePowerSellerDashboardType
 * Documentation : Provides information about your PowerSeller status.
 * @date 04/07/2012
 */
class EbayTradingTypePowerSellerDashboardType extends EbayTradingWsdlClass
{
	/**
	 * The Level
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Your eBay PowerSeller tier. PowerSellers are distinguished in 5 tiers based on average monthly sales. Benefits and services vary for each tier. eBay calculates eligibility for each tier monthly.
	 * @var EbayTradingTypeSellerLevelCodeType
	 */
	public $Level;
	/**
	 * The Alert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A message to help you understand your PowerSeller status. If you have policy violations, it is a good idea to check to see the policies you violated and to take steps to improve your selling practices. Violations can result in listing cancellations, restrictions on your account, and loss of PowerSeller status and privileges.
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
	 * @param EbayTradingTypeSellerLevelCodeType Level
	 * @param EbayTradingTypeSellerDashboardAlertType Alert
	 * @param DOMDocument any
	 * @return EbayTradingTypePowerSellerDashboardType
	 */
	public function __construct($_Level = null,$_Alert = null,$_any = null)
	{
		parent::__construct(array('Level'=>$_Level,'Alert'=>$_Alert,'any'=>$_any));
	}
	/**
	 * Set Level
	 * @param SellerLevelCodeType Level
	 * @return SellerLevelCodeType
	 */
	public function setLevel($_Level)
	{
		return ($this->Level = EbayTradingTypeSellerLevelCodeType::valueIsValid($_Level)?$_Level:null);
	}
	/**
	 * Get Level
	 * @return EbayTradingTypeSellerLevelCodeType
	 */
	public function getLevel()
	{
		return $this->Level;
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