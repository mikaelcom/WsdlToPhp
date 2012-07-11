<?php
/**
 * Class file for EbayTradingTypeRefundingSourceTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundingSourceTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeRefundingSourceTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ScheduledPayout'
	 * Meta informations :
	 * 	- documentation : The seller's scheduled payout account with eBay. When a buyer pays for an item the purchase amount goes into this account. This value indicates that the refund has been issued from the seller's scheduled payout account.<br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundingSourceType values are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @return string 'ScheduledPayout'
	 */
	const VALUE_SCHEDULEDPAYOUT = 'ScheduledPayout';
	/**
	 * Constant for value 'Paypal'
	 * Meta informations :
	 * 	- documentation : The seller's PayPal account associated with the transaction.<br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundingSourceType values are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @return string 'Paypal'
	 */
	const VALUE_PAYPAL = 'Paypal';
	/**
	 * Constant for value 'BankAccount'
	 * Meta informations :
	 * 	- documentation : The seller's bank account associated with the transaction.<br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundingSourceType values are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @return string 'BankAccount'
	 */
	const VALUE_BANKACCOUNT = 'BankAccount';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeRefundingSourceTypeCodeType
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
		return in_array($_value,array(self::VALUE_SCHEDULEDPAYOUT,self::VALUE_PAYPAL,self::VALUE_BANKACCOUNT,self::VALUE_CUSTOMCODE));
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