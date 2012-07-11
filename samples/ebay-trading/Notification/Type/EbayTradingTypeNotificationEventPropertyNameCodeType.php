<?php
/**
 * Class file for EbayTradingTypeNotificationEventPropertyNameCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNotificationEventPropertyNameCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeNotificationEventPropertyNameCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'TimeLeft'
	 * Meta informations :
	 * 	- documentation : Property name for WatchedItemEndingSoon events, enabling a user to specify a time in minutes before the end of the listing. Acceptable values: 5, 10, 15, 30, 60, 75, and 180. For example, to receive a WatchedItemEndingSoon notification 30 minutes before the item listing ends, specify 30.
	 * @return string 'TimeLeft'
	 */
	const VALUE_TIMELEFT = 'TimeLeft';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeNotificationEventPropertyNameCodeType
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
		return in_array($_value,array(self::VALUE_TIMELEFT,self::VALUE_CUSTOMCODE));
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