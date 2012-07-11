<?php
/**
 * Class file for EbayTradingTypePromotionalShippingDiscountDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePromotionalShippingDiscountDetailsType
 * Documentation : Details of a promotional shipping discount.
 * @date 04/07/2012
 */
class EbayTradingTypePromotionalShippingDiscountDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The DiscountName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of promotional shipping discount that is detailed in the profile. If MaximumShippingCostPerOrder, see ShippingCost. If ShippingCostXForAmountY, see ShippingCost and OrderAmount. If ShippingCostXForItemCountN, see ShippingCost and ItemCount.
	 * @var EbayTradingTypeDiscountNameCodeType
	 */
	public $DiscountName;
	/**
	 * The ShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This is shipping cost X, when DiscountName is either ShippingCostXForAmountY or ShippingCostXForItemCountN, and is the maximum cost when DiscountName is MaximumShippingCostPerOrder.
	 * @var EbayTradingTypeAmountType
	 */
	public $ShippingCost;
	/**
	 * The OrderAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This is the cost Y of the order (not including shipping cost), when DiscountName is set to ShippingCostXForAmountY.
	 * @var EbayTradingTypeAmountType
	 */
	public $OrderAmount;
	/**
	 * The ItemCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This is the number of items, when DiscountName is set to ShippingCostXForItemsY.
	 * @var int
	 */
	public $ItemCount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeDiscountNameCodeType DiscountName
	 * @param EbayTradingTypeAmountType ShippingCost
	 * @param EbayTradingTypeAmountType OrderAmount
	 * @param int ItemCount
	 * @param DOMDocument any
	 * @return EbayTradingTypePromotionalShippingDiscountDetailsType
	 */
	public function __construct($_DiscountName = null,$_ShippingCost = null,$_OrderAmount = null,$_ItemCount = null,$_any = null)
	{
		parent::__construct(array('DiscountName'=>$_DiscountName,'ShippingCost'=>$_ShippingCost,'OrderAmount'=>$_OrderAmount,'ItemCount'=>$_ItemCount,'any'=>$_any));
	}
	/**
	 * Set DiscountName
	 * @param DiscountNameCodeType DiscountName
	 * @return DiscountNameCodeType
	 */
	public function setDiscountName($_DiscountName)
	{
		return ($this->DiscountName = EbayTradingTypeDiscountNameCodeType::valueIsValid($_DiscountName)?$_DiscountName:null);
	}
	/**
	 * Get DiscountName
	 * @return EbayTradingTypeDiscountNameCodeType
	 */
	public function getDiscountName()
	{
		return $this->DiscountName;
	}
	/**
	 * Set ShippingCost
	 * @param AmountType ShippingCost
	 * @return AmountType
	 */
	public function setShippingCost($_ShippingCost)
	{
		return ($this->ShippingCost = $_ShippingCost);
	}
	/**
	 * Get ShippingCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getShippingCost()
	{
		return $this->ShippingCost;
	}
	/**
	 * Set OrderAmount
	 * @param AmountType OrderAmount
	 * @return AmountType
	 */
	public function setOrderAmount($_OrderAmount)
	{
		return ($this->OrderAmount = $_OrderAmount);
	}
	/**
	 * Get OrderAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getOrderAmount()
	{
		return $this->OrderAmount;
	}
	/**
	 * Set ItemCount
	 * @param int ItemCount
	 * @return int
	 */
	public function setItemCount($_ItemCount)
	{
		return ($this->ItemCount = $_ItemCount);
	}
	/**
	 * Get ItemCount
	 * @return int
	 */
	public function getItemCount()
	{
		return $this->ItemCount;
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