<?php
/**
 * Class file for PayPalTypePaymentStatusCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentStatusCodeType
 * @date 14/07/2012
 */
class PayPalTypePaymentStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Completed'
	 * @return string 'Completed'
	 */
	const VALUE_COMPLETED = 'Completed';
	/**
	 * Constant for value 'Failed'
	 * @return string 'Failed'
	 */
	const VALUE_FAILED = 'Failed';
	/**
	 * Constant for value 'Pending'
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'Denied'
	 * @return string 'Denied'
	 */
	const VALUE_DENIED = 'Denied';
	/**
	 * Constant for value 'Refunded'
	 * @return string 'Refunded'
	 */
	const VALUE_REFUNDED = 'Refunded';
	/**
	 * Constant for value 'Reversed'
	 * @return string 'Reversed'
	 */
	const VALUE_REVERSED = 'Reversed';
	/**
	 * Constant for value 'Canceled-Reversal'
	 * @return string 'Canceled-Reversal'
	 */
	const VALUE_CANCELED_REVERSAL = 'Canceled-Reversal';
	/**
	 * Constant for value 'Processed'
	 * @return string 'Processed'
	 */
	const VALUE_PROCESSED = 'Processed';
	/**
	 * Constant for value 'Partially-Refunded'
	 * @return string 'Partially-Refunded'
	 */
	const VALUE_PARTIALLY_REFUNDED = 'Partially-Refunded';
	/**
	 * Constant for value 'Voided'
	 * @return string 'Voided'
	 */
	const VALUE_VOIDED = 'Voided';
	/**
	 * Constant for value 'Expired'
	 * @return string 'Expired'
	 */
	const VALUE_EXPIRED = 'Expired';
	/**
	 * Constant for value 'In-Progress'
	 * @return string 'In-Progress'
	 */
	const VALUE_IN_PROGRESS = 'In-Progress';
	/**
	 * Constant for value 'Created'
	 * @return string 'Created'
	 */
	const VALUE_CREATED = 'Created';
	/**
	 * Constant for value 'Completed-Funds-Held'
	 * @return string 'Completed-Funds-Held'
	 */
	const VALUE_COMPLETED_FUNDS_HELD = 'Completed-Funds-Held';
	/**
	 * Constant for value 'Instant'
	 * @return string 'Instant'
	 */
	const VALUE_INSTANT = 'Instant';
	/**
	 * Constant for value 'Delayed'
	 * @return string 'Delayed'
	 */
	const VALUE_DELAYED = 'Delayed';
	/**
	 * Constructor
	 * @return PayPalTypePaymentStatusCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_COMPLETED,self::VALUE_FAILED,self::VALUE_PENDING,self::VALUE_DENIED,self::VALUE_REFUNDED,self::VALUE_REVERSED,self::VALUE_CANCELED_REVERSAL,self::VALUE_PROCESSED,self::VALUE_PARTIALLY_REFUNDED,self::VALUE_VOIDED,self::VALUE_EXPIRED,self::VALUE_IN_PROGRESS,self::VALUE_CREATED,self::VALUE_COMPLETED_FUNDS_HELD,self::VALUE_INSTANT,self::VALUE_DELAYED));
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