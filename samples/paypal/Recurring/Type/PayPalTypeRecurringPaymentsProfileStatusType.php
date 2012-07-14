<?php
/**
 * Class file for PayPalTypeRecurringPaymentsProfileStatusType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeRecurringPaymentsProfileStatusType
 * @date 14/07/2012
 */
class PayPalTypeRecurringPaymentsProfileStatusType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'ActiveProfile'
	 * @return string 'ActiveProfile'
	 */
	const VALUE_ACTIVEPROFILE = 'ActiveProfile';
	/**
	 * Constant for value 'PendingProfile'
	 * @return string 'PendingProfile'
	 */
	const VALUE_PENDINGPROFILE = 'PendingProfile';
	/**
	 * Constant for value 'CancelledProfile'
	 * @return string 'CancelledProfile'
	 */
	const VALUE_CANCELLEDPROFILE = 'CancelledProfile';
	/**
	 * Constant for value 'ExpiredProfile'
	 * @return string 'ExpiredProfile'
	 */
	const VALUE_EXPIREDPROFILE = 'ExpiredProfile';
	/**
	 * Constant for value 'SuspendedProfile'
	 * @return string 'SuspendedProfile'
	 */
	const VALUE_SUSPENDEDPROFILE = 'SuspendedProfile';
	/**
	 * Constructor
	 * @return PayPalTypeRecurringPaymentsProfileStatusType
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
		return in_array($_value,array(self::VALUE_ACTIVEPROFILE,self::VALUE_PENDINGPROFILE,self::VALUE_CANCELLEDPROFILE,self::VALUE_EXPIREDPROFILE,self::VALUE_SUSPENDEDPROFILE));
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