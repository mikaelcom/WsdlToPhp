<?php
/**
 * Class file for EbayTradingTypeNotificationRoleCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNotificationRoleCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeNotificationRoleCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Application'
	 * Meta informations :
	 * 	- documentation : (in) Specifies that you want to set or return application-level preferences. Default value.
	 * @return string 'Application'
	 */
	const VALUE_APPLICATION = 'Application';
	/**
	 * Constant for value 'User'
	 * Meta informations :
	 * 	- documentation : (in) Specifies that you want to set or return user-level preferences.
	 * @return string 'User'
	 */
	const VALUE_USER = 'User';
	/**
	 * Constant for value 'UserData'
	 * Meta informations :
	 * 	- documentation : (in) Specifies that you want to set or return user data-level preferences.
	 * @return string 'UserData'
	 */
	const VALUE_USERDATA = 'UserData';
	/**
	 * Constant for value 'Event'
	 * Meta informations :
	 * 	- documentation : (in) Specifies that you want to set or return event-level preferences.
	 * @return string 'Event'
	 */
	const VALUE_EVENT = 'Event';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeNotificationRoleCodeType
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
		return in_array($_value,array(self::VALUE_APPLICATION,self::VALUE_USER,self::VALUE_USERDATA,self::VALUE_EVENT,self::VALUE_CUSTOMCODE));
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