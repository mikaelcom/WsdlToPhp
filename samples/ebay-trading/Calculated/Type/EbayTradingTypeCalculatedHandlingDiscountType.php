<?php
/**
 * Class file for EbayTradingTypeCalculatedHandlingDiscountType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCalculatedHandlingDiscountType
 * Documentation : Instructions on packaging/handling costs for combined payment.
 * @date 04/07/2012
 */
class EbayTradingTypeCalculatedHandlingDiscountType extends EbayTradingWsdlClass
{
	/**
	 * The DiscountName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of discount that is detailed in the profile. If the selection is EachAdditionalAmount, EachAdditionalAmountOff or EachAdditionalPercentOff, the value is set in the child element of same name in CalculatedHandlingDiscount. If the selection is CombinedHandlingFee, specify the amount in CalculatedHandlingDiscount.OrderHandlingAmount. If the selection is IndividualHandlingFee, the amount is determined by eBay by adding the fees of the individual items.
	 * @var EbayTradingTypeHandlingNameCodeType
	 */
	public $DiscountName;
	/**
	 * The OrderHandlingAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If specified, this is the fixed shipping cost to charge for an order, regardless of the number of items in the order. This field is mutually exclusive with the other amount and percentage fields within this type. This field only applies when DiscountName is CombinedHandlingFee.
	 * @var EbayTradingTypeAmountType
	 */
	public $OrderHandlingAmount;
	/**
	 * The EachAdditionalAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The packaging/handling cost for each item beyond the first item (where the item with the highest packaging/handling cost is selected by eBay as the first item). Let's say the buyer purchases three items, each assigned a packaging/handling cost of $8, and the seller set EachAdditionalAmount to $6. The packaging/handling cost for three items would normally be $24, but since the seller specified $6, the total packaging/handling cost would be $8 + $6 + $6, or $20. This field is mutually exclusive with the other amount and percentage fields within this type. This field only applies when DiscountName is EachAdditionalAmount.
	 * @var EbayTradingTypeAmountType
	 */
	public $EachAdditionalAmount;
	/**
	 * The EachAdditionalOffAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The amount by which to reduce the packaging/handling cost for each item beyond the first item (where the item with the highest packaging/handling cost is selected by eBay as the first item). Let's say the buyer purchases three items, each assigned a packaging/handling cost of $8, and the seller set EachAdditionalAmountOff to $2. The packaging/handling cost for three items would normally be $24, but since the seller specified $2, the total packaging/handling cost would be $24 - (two additional items x $2), or $20. This field is mutually exclusive with the other amount and percentage fields within this type. This field only applies when DiscountName is EachAdditionalOffAmount.
	 * @var EbayTradingTypeAmountType
	 */
	public $EachAdditionalOffAmount;
	/**
	 * The EachAdditionalPercentOff
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The percentage by which to reduce the packaging/handling cost for each item beyond the first item (where the item with the highest packaging/handling cost is selected by eBay as the first item). Let's say the buyer purchases three items, each assigned a packaging/handling cost of $8, and the seller set EachAdditionalPercentOff to 0.25. The packaging/handling cost for three items would normally be $24, but since the seller specified 0.25 ($2 out of 8), the total packaging/handling cost would be $24 - (two additional items x $2), or $20. This field is mutually exclusive with the amount fields within this type. This field only applies when DiscountName is EachAdditionalPercentOff.
	 * @var float
	 */
	public $EachAdditionalPercentOff;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeHandlingNameCodeType DiscountName
	 * @param EbayTradingTypeAmountType OrderHandlingAmount
	 * @param EbayTradingTypeAmountType EachAdditionalAmount
	 * @param EbayTradingTypeAmountType EachAdditionalOffAmount
	 * @param float EachAdditionalPercentOff
	 * @param DOMDocument any
	 * @return EbayTradingTypeCalculatedHandlingDiscountType
	 */
	public function __construct($_DiscountName = null,$_OrderHandlingAmount = null,$_EachAdditionalAmount = null,$_EachAdditionalOffAmount = null,$_EachAdditionalPercentOff = null,$_any = null)
	{
		parent::__construct(array('DiscountName'=>$_DiscountName,'OrderHandlingAmount'=>$_OrderHandlingAmount,'EachAdditionalAmount'=>$_EachAdditionalAmount,'EachAdditionalOffAmount'=>$_EachAdditionalOffAmount,'EachAdditionalPercentOff'=>$_EachAdditionalPercentOff,'any'=>$_any));
	}
	/**
	 * Set DiscountName
	 * @param HandlingNameCodeType DiscountName
	 * @return HandlingNameCodeType
	 */
	public function setDiscountName($_DiscountName)
	{
		return ($this->DiscountName = EbayTradingTypeHandlingNameCodeType::valueIsValid($_DiscountName)?$_DiscountName:null);
	}
	/**
	 * Get DiscountName
	 * @return EbayTradingTypeHandlingNameCodeType
	 */
	public function getDiscountName()
	{
		return $this->DiscountName;
	}
	/**
	 * Set OrderHandlingAmount
	 * @param AmountType OrderHandlingAmount
	 * @return AmountType
	 */
	public function setOrderHandlingAmount($_OrderHandlingAmount)
	{
		return ($this->OrderHandlingAmount = $_OrderHandlingAmount);
	}
	/**
	 * Get OrderHandlingAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getOrderHandlingAmount()
	{
		return $this->OrderHandlingAmount;
	}
	/**
	 * Set EachAdditionalAmount
	 * @param AmountType EachAdditionalAmount
	 * @return AmountType
	 */
	public function setEachAdditionalAmount($_EachAdditionalAmount)
	{
		return ($this->EachAdditionalAmount = $_EachAdditionalAmount);
	}
	/**
	 * Get EachAdditionalAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getEachAdditionalAmount()
	{
		return $this->EachAdditionalAmount;
	}
	/**
	 * Set EachAdditionalOffAmount
	 * @param AmountType EachAdditionalOffAmount
	 * @return AmountType
	 */
	public function setEachAdditionalOffAmount($_EachAdditionalOffAmount)
	{
		return ($this->EachAdditionalOffAmount = $_EachAdditionalOffAmount);
	}
	/**
	 * Get EachAdditionalOffAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getEachAdditionalOffAmount()
	{
		return $this->EachAdditionalOffAmount;
	}
	/**
	 * Set EachAdditionalPercentOff
	 * @param float EachAdditionalPercentOff
	 * @return float
	 */
	public function setEachAdditionalPercentOff($_EachAdditionalPercentOff)
	{
		return ($this->EachAdditionalPercentOff = $_EachAdditionalPercentOff);
	}
	/**
	 * Get EachAdditionalPercentOff
	 * @return float
	 */
	public function getEachAdditionalPercentOff()
	{
		return $this->EachAdditionalPercentOff;
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