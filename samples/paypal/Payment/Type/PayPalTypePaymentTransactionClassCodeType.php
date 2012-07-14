<?php
/**
 * Class file for PayPalTypePaymentTransactionClassCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentTransactionClassCodeType
 * @date 14/07/2012
 */
class PayPalTypePaymentTransactionClassCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'All'
	 * @return string 'All'
	 */
	const VALUE_ALL = 'All';
	/**
	 * Constant for value 'Sent'
	 * @return string 'Sent'
	 */
	const VALUE_SENT = 'Sent';
	/**
	 * Constant for value 'Received'
	 * @return string 'Received'
	 */
	const VALUE_RECEIVED = 'Received';
	/**
	 * Constant for value 'MassPay'
	 * @return string 'MassPay'
	 */
	const VALUE_MASSPAY = 'MassPay';
	/**
	 * Constant for value 'MoneyRequest'
	 * @return string 'MoneyRequest'
	 */
	const VALUE_MONEYREQUEST = 'MoneyRequest';
	/**
	 * Constant for value 'FundsAdded'
	 * @return string 'FundsAdded'
	 */
	const VALUE_FUNDSADDED = 'FundsAdded';
	/**
	 * Constant for value 'FundsWithdrawn'
	 * @return string 'FundsWithdrawn'
	 */
	const VALUE_FUNDSWITHDRAWN = 'FundsWithdrawn';
	/**
	 * Constant for value 'PayPalDebitCard'
	 * @return string 'PayPalDebitCard'
	 */
	const VALUE_PAYPALDEBITCARD = 'PayPalDebitCard';
	/**
	 * Constant for value 'Referral'
	 * @return string 'Referral'
	 */
	const VALUE_REFERRAL = 'Referral';
	/**
	 * Constant for value 'Fee'
	 * @return string 'Fee'
	 */
	const VALUE_FEE = 'Fee';
	/**
	 * Constant for value 'Subscription'
	 * @return string 'Subscription'
	 */
	const VALUE_SUBSCRIPTION = 'Subscription';
	/**
	 * Constant for value 'Dividend'
	 * @return string 'Dividend'
	 */
	const VALUE_DIVIDEND = 'Dividend';
	/**
	 * Constant for value 'Billpay'
	 * @return string 'Billpay'
	 */
	const VALUE_BILLPAY = 'Billpay';
	/**
	 * Constant for value 'Refund'
	 * @return string 'Refund'
	 */
	const VALUE_REFUND = 'Refund';
	/**
	 * Constant for value 'CurrencyConversions'
	 * @return string 'CurrencyConversions'
	 */
	const VALUE_CURRENCYCONVERSIONS = 'CurrencyConversions';
	/**
	 * Constant for value 'BalanceTransfer'
	 * @return string 'BalanceTransfer'
	 */
	const VALUE_BALANCETRANSFER = 'BalanceTransfer';
	/**
	 * Constant for value 'Reversal'
	 * @return string 'Reversal'
	 */
	const VALUE_REVERSAL = 'Reversal';
	/**
	 * Constant for value 'Shipping'
	 * @return string 'Shipping'
	 */
	const VALUE_SHIPPING = 'Shipping';
	/**
	 * Constant for value 'BalanceAffecting'
	 * @return string 'BalanceAffecting'
	 */
	const VALUE_BALANCEAFFECTING = 'BalanceAffecting';
	/**
	 * Constant for value 'ECheck'
	 * @return string 'ECheck'
	 */
	const VALUE_ECHECK = 'ECheck';
	/**
	 * Constructor
	 * @return PayPalTypePaymentTransactionClassCodeType
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
		return in_array($_value,array(self::VALUE_ALL,self::VALUE_SENT,self::VALUE_RECEIVED,self::VALUE_MASSPAY,self::VALUE_MONEYREQUEST,self::VALUE_FUNDSADDED,self::VALUE_FUNDSWITHDRAWN,self::VALUE_PAYPALDEBITCARD,self::VALUE_REFERRAL,self::VALUE_FEE,self::VALUE_SUBSCRIPTION,self::VALUE_DIVIDEND,self::VALUE_BILLPAY,self::VALUE_REFUND,self::VALUE_CURRENCYCONVERSIONS,self::VALUE_BALANCETRANSFER,self::VALUE_REVERSAL,self::VALUE_SHIPPING,self::VALUE_BALANCEAFFECTING,self::VALUE_ECHECK));
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