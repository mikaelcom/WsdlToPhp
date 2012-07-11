<?php
/**
 * Class file for EbayTradingTypeRefundLineTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundLineTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeRefundLineTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'PurchasePrice'
	 * Meta informations :
	 * 	- documentation : The refund was applied to the purchase price.<br/><br/>
	 * @return string 'PurchasePrice'
	 */
	const VALUE_PURCHASEPRICE = 'PurchasePrice';
	/**
	 * Constant for value 'ShippingPrice'
	 * Meta informations :
	 * 	- documentation : The refund was applied to the shipping cost.<br/><br/>
	 * @return string 'ShippingPrice'
	 */
	const VALUE_SHIPPINGPRICE = 'ShippingPrice';
	/**
	 * Constant for value 'Additional'
	 * Meta informations :
	 * 	- documentation : An additional refund (not accounted for in the original order costs) was issued.<br/><br/>
	 * @return string 'Additional'
	 */
	const VALUE_ADDITIONAL = 'Additional';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeRefundLineTypeCodeType
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
		return in_array($_value,array(self::VALUE_PURCHASEPRICE,self::VALUE_SHIPPINGPRICE,self::VALUE_ADDITIONAL,self::VALUE_CUSTOMCODE));
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