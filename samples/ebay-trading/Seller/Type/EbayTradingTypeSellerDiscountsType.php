<?php
/**
 * Class file for EbayTradingTypeSellerDiscountsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerDiscountsType
 * Documentation : Type defining the <b>SellerDiscounts</b> container, which consists of one or more <b>SellerDiscount</b> nodes, as well as the original purchase price and shipping cost of the order line item.
 * @date 04/07/2012
 */
class EbayTradingTypeSellerDiscountsType extends EbayTradingWsdlClass
{
	/**
	 * The OriginalItemPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The original purchase price of the order line item (before any seller discounts are applied).
	 * @var EbayTradingTypeAmountType
	 */
	public $OriginalItemPrice;
	/**
	 * The OriginalItemShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The original shipping cost for the order line item. Note that shipping discounts have not yet been enabled for seller discount campaigns.
	 * @var EbayTradingTypeAmountType
	 */
	public $OriginalItemShippingCost;
	/**
	 * The SellerDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item. Note that shipping discounts have not yet been enabled for seller discount campaigns.
	 * @var EbayTradingTypeSellerDiscountType
	 */
	public $SellerDiscount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAmountType OriginalItemPrice
	 * @param EbayTradingTypeAmountType OriginalItemShippingCost
	 * @param EbayTradingTypeSellerDiscountType SellerDiscount
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerDiscountsType
	 */
	public function __construct($_OriginalItemPrice = null,$_OriginalItemShippingCost = null,$_SellerDiscount = null,$_any = null)
	{
		parent::__construct(array('OriginalItemPrice'=>$_OriginalItemPrice,'OriginalItemShippingCost'=>$_OriginalItemShippingCost,'SellerDiscount'=>$_SellerDiscount,'any'=>$_any));
	}
	/**
	 * Set OriginalItemPrice
	 * @param AmountType OriginalItemPrice
	 * @return AmountType
	 */
	public function setOriginalItemPrice($_OriginalItemPrice)
	{
		return ($this->OriginalItemPrice = $_OriginalItemPrice);
	}
	/**
	 * Get OriginalItemPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getOriginalItemPrice()
	{
		return $this->OriginalItemPrice;
	}
	/**
	 * Set OriginalItemShippingCost
	 * @param AmountType OriginalItemShippingCost
	 * @return AmountType
	 */
	public function setOriginalItemShippingCost($_OriginalItemShippingCost)
	{
		return ($this->OriginalItemShippingCost = $_OriginalItemShippingCost);
	}
	/**
	 * Get OriginalItemShippingCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getOriginalItemShippingCost()
	{
		return $this->OriginalItemShippingCost;
	}
	/**
	 * Set SellerDiscount
	 * @param SellerDiscountType SellerDiscount
	 * @return SellerDiscountType
	 */
	public function setSellerDiscount($_SellerDiscount)
	{
		return ($this->SellerDiscount = $_SellerDiscount);
	}
	/**
	 * Get SellerDiscount
	 * @return EbayTradingTypeSellerDiscountType
	 */
	public function getSellerDiscount()
	{
		return $this->SellerDiscount;
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