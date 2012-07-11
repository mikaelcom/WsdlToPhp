<?php
/**
 * Class file for EbayTradingTypeCheckoutOrderDetailType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCheckoutOrderDetailType
 * Documentation : Details of the order for a checked out cart.
 * @date 04/07/2012
 */
class EbayTradingTypeCheckoutOrderDetailType extends EbayTradingWsdlClass
{
	/**
	 * The TotalCartMerchandiseCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total item cost of all items in the cart.
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalCartMerchandiseCost;
	/**
	 * The TotalCartShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total shipping cost of all items in the cart.
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalCartShippingCost;
	/**
	 * The TotalTaxAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total tax for all items in the cart.
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalTaxAmount;
	/**
	 * The TotalAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The overall total cost (including item cost, shipping cost and taxes).
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalAmount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAmountType TotalCartMerchandiseCost
	 * @param EbayTradingTypeAmountType TotalCartShippingCost
	 * @param EbayTradingTypeAmountType TotalTaxAmount
	 * @param EbayTradingTypeAmountType TotalAmount
	 * @param DOMDocument any
	 * @return EbayTradingTypeCheckoutOrderDetailType
	 */
	public function __construct($_TotalCartMerchandiseCost = null,$_TotalCartShippingCost = null,$_TotalTaxAmount = null,$_TotalAmount = null,$_any = null)
	{
		parent::__construct(array('TotalCartMerchandiseCost'=>$_TotalCartMerchandiseCost,'TotalCartShippingCost'=>$_TotalCartShippingCost,'TotalTaxAmount'=>$_TotalTaxAmount,'TotalAmount'=>$_TotalAmount,'any'=>$_any));
	}
	/**
	 * Set TotalCartMerchandiseCost
	 * @param AmountType TotalCartMerchandiseCost
	 * @return AmountType
	 */
	public function setTotalCartMerchandiseCost($_TotalCartMerchandiseCost)
	{
		return ($this->TotalCartMerchandiseCost = $_TotalCartMerchandiseCost);
	}
	/**
	 * Get TotalCartMerchandiseCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getTotalCartMerchandiseCost()
	{
		return $this->TotalCartMerchandiseCost;
	}
	/**
	 * Set TotalCartShippingCost
	 * @param AmountType TotalCartShippingCost
	 * @return AmountType
	 */
	public function setTotalCartShippingCost($_TotalCartShippingCost)
	{
		return ($this->TotalCartShippingCost = $_TotalCartShippingCost);
	}
	/**
	 * Get TotalCartShippingCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getTotalCartShippingCost()
	{
		return $this->TotalCartShippingCost;
	}
	/**
	 * Set TotalTaxAmount
	 * @param AmountType TotalTaxAmount
	 * @return AmountType
	 */
	public function setTotalTaxAmount($_TotalTaxAmount)
	{
		return ($this->TotalTaxAmount = $_TotalTaxAmount);
	}
	/**
	 * Get TotalTaxAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getTotalTaxAmount()
	{
		return $this->TotalTaxAmount;
	}
	/**
	 * Set TotalAmount
	 * @param AmountType TotalAmount
	 * @return AmountType
	 */
	public function setTotalAmount($_TotalAmount)
	{
		return ($this->TotalAmount = $_TotalAmount);
	}
	/**
	 * Get TotalAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getTotalAmount()
	{
		return $this->TotalAmount;
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