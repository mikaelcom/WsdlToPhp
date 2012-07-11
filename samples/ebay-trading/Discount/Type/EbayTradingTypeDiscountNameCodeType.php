<?php
/**
 * Class file for EbayTradingTypeDiscountNameCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDiscountNameCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDiscountNameCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'EachAdditionalAmount'
	 * Meta informations :
	 * 	- documentation : The cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8, and the seller set EachAdditionalAmount to $6. The cost to ship three items would normally be $24, but since the seller specified $6, the total shipping cost would be $8 + $6 + $6, or $20. For flat shipping discount profile only.
	 * @return string 'EachAdditionalAmount'
	 */
	const VALUE_EACHADDITIONALAMOUNT = 'EachAdditionalAmount';
	/**
	 * Constant for value 'EachAdditionalAmountOff'
	 * Meta informations :
	 * 	- documentation : The amount by which to reduce the cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8, and the seller set EachAdditionalAmountOff to $2. The cost to ship three items would normally be $24, but since the seller specified $2, the total shipping cost would be $24 - (two additional items x $2), or $20. For flat shipping discount profile only.
	 * @return string 'EachAdditionalAmountOff'
	 */
	const VALUE_EACHADDITIONALAMOUNTOFF = 'EachAdditionalAmountOff';
	/**
	 * Constant for value 'EachAdditionalPercentOff'
	 * Meta informations :
	 * 	- documentation : The percentage by which to reduce the cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8, and the seller set EachAdditionalPercentOff to 0.25. The cost to ship three items would normally be $24, but since the seller specified 0.25 ($2 out of 8), the total shipping cost would be $24 - (two additional items x $2), or $20. For flat rate shipping discount profile only.
	 * @return string 'EachAdditionalPercentOff'
	 */
	const VALUE_EACHADDITIONALPERCENTOFF = 'EachAdditionalPercentOff';
	/**
	 * Constant for value 'IndividualItemWeight'
	 * Meta informations :
	 * 	- documentation : Shipping cost is the total of what it would cost to ship each item individually. This is simply a way to define how shipping is to be calculated--there is no discount for the buyer with this selection. For calculated shipping discount profile only.
	 * @return string 'IndividualItemWeight'
	 */
	const VALUE_INDIVIDUALITEMWEIGHT = 'IndividualItemWeight';
	/**
	 * Constant for value 'CombinedItemWeight'
	 * Meta informations :
	 * 	- documentation : Shipping cost is based on the total weight of all individual items. This is simply a way to define how shipping is to be calculated--there is no discount for the buyer with this selection. For calculated shipping discount profile only.
	 * @return string 'CombinedItemWeight'
	 */
	const VALUE_COMBINEDITEMWEIGHT = 'CombinedItemWeight';
	/**
	 * Constant for value 'WeightOff'
	 * Meta informations :
	 * 	- documentation : The amount of weight to subtract for each item beyond the first item before shipping costs are calculated. For example, there may be less packing material when the items are combined in one box than if they were shipped individually. Let's say the buyer purchases three items, each 10 oz. in weight, and the seller set WeightOff to 2 oz. The combined weight would be 30 oz., but since the seller specified 2 oz. off, the total weight for shipping cost calculation would be 30 oz. - (two additional items x 2 oz.), or 26 oz. For calculated shipping discount profile only.
	 * @return string 'WeightOff'
	 */
	const VALUE_WEIGHTOFF = 'WeightOff';
	/**
	 * Constant for value 'ShippingCostXForAmountY'
	 * Meta informations :
	 * 	- documentation : Shipping cost X applies if the total cost of items purchased is Y. For promotional discount only.
	 * @return string 'ShippingCostXForAmountY'
	 */
	const VALUE_SHIPPINGCOSTXFORAMOUNTY = 'ShippingCostXForAmountY';
	/**
	 * Constant for value 'ShippingCostXForItemCountN'
	 * Meta informations :
	 * 	- documentation : Shipping cost X applies if the total number of items purchased is N. For promotional discount only.
	 * @return string 'ShippingCostXForItemCountN'
	 */
	const VALUE_SHIPPINGCOSTXFORITEMCOUNTN = 'ShippingCostXForItemCountN';
	/**
	 * Constant for value 'MaximumShippingCostPerOrder'
	 * Meta informations :
	 * 	- documentation : The shipping cost will not exceed this. For promotional discount only.
	 * @return string 'MaximumShippingCostPerOrder'
	 */
	const VALUE_MAXIMUMSHIPPINGCOSTPERORDER = 'MaximumShippingCostPerOrder';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDiscountNameCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_EACHADDITIONALAMOUNT,self::VALUE_EACHADDITIONALAMOUNTOFF,self::VALUE_EACHADDITIONALPERCENTOFF,self::VALUE_INDIVIDUALITEMWEIGHT,self::VALUE_COMBINEDITEMWEIGHT,self::VALUE_WEIGHTOFF,self::VALUE_SHIPPINGCOSTXFORAMOUNTY,self::VALUE_SHIPPINGCOSTXFORITEMCOUNTN,self::VALUE_MAXIMUMSHIPPINGCOSTPERORDER,self::VALUE_CUSTOMCODE));
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