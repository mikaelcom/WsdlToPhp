<?php
/**
 * Class file for EbayTradingTypeDeviceTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDeviceTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDeviceTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Platform'
	 * Meta informations :
	 * 	- documentation : Typical API, web page interaction.
	 * @return string 'Platform'
	 */
	const VALUE_PLATFORM = 'Platform';
	/**
	 * Constant for value 'SMS'
	 * Meta informations :
	 * 	- documentation : For SMS/wireless application. Note that SMS is currently reserved for future use.
	 * @return string 'SMS'
	 */
	const VALUE_SMS = 'SMS';
	/**
	 * Constant for value 'ClientAlerts'
	 * Meta informations :
	 * 	- documentation : Warning: do NOT set this value in production if you currently use Platform Notifications with this application ID. Setting this value will discontinue all platform notifications for this application ID, until this value is reset to Platform. <br> <br> Set this enum value to specify that the notification client is a Client Alerts API client. Alerts will be delivered through the Client Alerts system.
	 * @return string 'ClientAlerts'
	 */
	const VALUE_CLIENTALERTS = 'ClientAlerts';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDeviceTypeCodeType
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
		return in_array($_value,array(self::VALUE_PLATFORM,self::VALUE_SMS,self::VALUE_CLIENTALERTS,self::VALUE_CUSTOMCODE));
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