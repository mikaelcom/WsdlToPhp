<?php
/**
 * Class file for EbayTradingTypeSellerFeeDiscountDashboardType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerFeeDiscountDashboardType
 * Documentation : PowerSeller discount information (e.g., to show in a Seller Dashboard). As a PowerSeller, you can earn discounts on your monthly invoice Final Value Fees based on how well you're doing as a seller.
 * @date 04/07/2012
 */
class EbayTradingTypeSellerFeeDiscountDashboardType extends EbayTradingWsdlClass
{
	/**
	 * The Percent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : PowerSeller discount as a percentage. For example, a 5% discount is returned as 0.05.
	 * @var float
	 */
	public $Percent;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param float Percent
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerFeeDiscountDashboardType
	 */
	public function __construct($_Percent = null,$_any = null)
	{
		parent::__construct(array('Percent'=>$_Percent,'any'=>$_any));
	}
	/**
	 * Set Percent
	 * @param float Percent
	 * @return float
	 */
	public function setPercent($_Percent)
	{
		return ($this->Percent = $_Percent);
	}
	/**
	 * Get Percent
	 * @return float
	 */
	public function getPercent()
	{
		return $this->Percent;
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