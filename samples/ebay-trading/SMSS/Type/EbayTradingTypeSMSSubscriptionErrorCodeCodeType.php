<?php
/**
 * Class file for EbayTradingTypeSMSSubscriptionErrorCodeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSMSSubscriptionErrorCodeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSMSSubscriptionErrorCodeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'SMSAggregatorNotAvailable'
	 * Meta informations :
	 * 	- documentation : Aggregator not available.
	 * @return string 'SMSAggregatorNotAvailable'
	 */
	const VALUE_SMSAGGREGATORNOTAVAILABLE = 'SMSAggregatorNotAvailable';
	/**
	 * Constant for value 'PhoneNumberInvalid'
	 * Meta informations :
	 * 	- documentation : Phone number invalid.
	 * @return string 'PhoneNumberInvalid'
	 */
	const VALUE_PHONENUMBERINVALID = 'PhoneNumberInvalid';
	/**
	 * Constant for value 'PhoneNumberChanged'
	 * Meta informations :
	 * 	- documentation : Phone number has changed.
	 * @return string 'PhoneNumberChanged'
	 */
	const VALUE_PHONENUMBERCHANGED = 'PhoneNumberChanged';
	/**
	 * Constant for value 'PhoneNumberCarrierChanged'
	 * Meta informations :
	 * 	- documentation : The carrier has changed.
	 * @return string 'PhoneNumberCarrierChanged'
	 */
	const VALUE_PHONENUMBERCARRIERCHANGED = 'PhoneNumberCarrierChanged';
	/**
	 * Constant for value 'UserRequestedUnregistration'
	 * Meta informations :
	 * 	- documentation : The user has requested to be unregistered.
	 * @return string 'UserRequestedUnregistration'
	 */
	const VALUE_USERREQUESTEDUNREGISTRATION = 'UserRequestedUnregistration';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSMSSubscriptionErrorCodeCodeType
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
		return in_array($_value,array(self::VALUE_SMSAGGREGATORNOTAVAILABLE,self::VALUE_PHONENUMBERINVALID,self::VALUE_PHONENUMBERCHANGED,self::VALUE_PHONENUMBERCARRIERCHANGED,self::VALUE_USERREQUESTEDUNREGISTRATION,self::VALUE_CUSTOMCODE));
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