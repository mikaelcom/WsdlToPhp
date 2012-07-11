<?php
/**
 * Class file for EbayTradingTypeRefundOptionsCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundOptionsCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeRefundOptionsCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'MoneyBack'
	 * Meta informations :
	 * 	- documentation : The seller will refund the basic listing (or transaction) cost, excluding shipping and other costs. Use ReturnPolicy.Description to explain how the seller will handle the refund (such as whether the refund will occur via PayPal).
	 * @return string 'MoneyBack'
	 */
	const VALUE_MONEYBACK = 'MoneyBack';
	/**
	 * Constant for value 'Exchange'
	 * Meta informations :
	 * 	- documentation : This value is being deprecated in 2012. We recommend that you stop using this value. Beginning with version 759, a warning message will be returned if a listing is created or revised with this value. And starting in early May 2012, listings created or revised with this value will be blocked. <br><br> The seller will exchange the returned item for another item. Use ReturnPolicy.Description to explain how this will occur (such as whether the seller will send an identical item in place of the returned item).
	 * @return string 'Exchange'
	 */
	const VALUE_EXCHANGE = 'Exchange';
	/**
	 * Constant for value 'MerchandiseCredit'
	 * Meta informations :
	 * 	- documentation : This value is being deprecated in 2012. We recommend that you stop using this value. Beginning with version 759, a warning message will be returned if a listing is created or revised with this value. And starting in early May 2012, listings created or revised with this value will be blocked. <br><br> The seller will give the buyer a credit toward the purchase of another item. Use ReturnPolicy.Description to explain how the buyer can redeem this credit.
	 * @return string 'MerchandiseCredit'
	 */
	const VALUE_MERCHANDISECREDIT = 'MerchandiseCredit';
	/**
	 * Constant for value 'MoneyBackOrExchange'
	 * Meta informations :
	 * 	- documentation : The seller will either issue the buyer a refund for the cost of the item (excluding shipping and other costs), or the seller will exchange the returned item for another identical/similar item. <br><br> Use ReturnPolicy.Description to explain how the seller will handle the refund (such as whether the refund will occur via PayPal), or how the exchange will occur (such as whether the seller will send an identical item in place of the returned item).
	 * @return string 'MoneyBackOrExchange'
	 */
	const VALUE_MONEYBACKOREXCHANGE = 'MoneyBackOrExchange';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeRefundOptionsCodeType
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
		return in_array($_value,array(self::VALUE_MONEYBACK,self::VALUE_EXCHANGE,self::VALUE_MERCHANDISECREDIT,self::VALUE_MONEYBACKOREXCHANGE,self::VALUE_CUSTOMCODE));
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