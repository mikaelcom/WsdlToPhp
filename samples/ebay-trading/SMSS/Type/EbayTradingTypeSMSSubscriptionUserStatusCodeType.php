<?php
/**
 * Class file for EbayTradingTypeSMSSubscriptionUserStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSMSSubscriptionUserStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSMSSubscriptionUserStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Registered'
	 * Meta informations :
	 * 	- documentation : (out) Registered.
	 * @return string 'Registered'
	 */
	const VALUE_REGISTERED = 'Registered';
	/**
	 * Constant for value 'Unregistered'
	 * Meta informations :
	 * 	- documentation : (out) Unregistered.
	 * @return string 'Unregistered'
	 */
	const VALUE_UNREGISTERED = 'Unregistered';
	/**
	 * Constant for value 'Pending'
	 * Meta informations :
	 * 	- documentation : (out) Pending subscription.
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'Failed'
	 * Meta informations :
	 * 	- documentation : (out) Subscription failed.
	 * @return string 'Failed'
	 */
	const VALUE_FAILED = 'Failed';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSMSSubscriptionUserStatusCodeType
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
		return in_array($_value,array(self::VALUE_REGISTERED,self::VALUE_UNREGISTERED,self::VALUE_PENDING,self::VALUE_FAILED,self::VALUE_CUSTOMCODE));
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