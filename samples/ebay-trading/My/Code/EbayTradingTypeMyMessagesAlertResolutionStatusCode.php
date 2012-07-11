<?php
/**
 * Class file for EbayTradingTypeMyMessagesAlertResolutionStatusCode
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyMessagesAlertResolutionStatusCode
 * @date 04/07/2012
 */
class EbayTradingTypeMyMessagesAlertResolutionStatusCode extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Unresolved'
	 * Meta informations :
	 * 	- documentation : The alert has not been resolved. If the alert requires user action, an unresolved status means that the user did not take action on the alert. If the alert does not require user action, an unresolved status means that the alert has not been read. Note that an unresolved alert can not be deleted.
	 * @return string 'Unresolved'
	 */
	const VALUE_UNRESOLVED = 'Unresolved';
	/**
	 * Constant for value 'ResolvedByAutoResolution'
	 * Meta informations :
	 * 	- documentation : The alert was resolved by auto resolution, for example, by expiring after a certain date.
	 * @return string 'ResolvedByAutoResolution'
	 */
	const VALUE_RESOLVEDBYAUTORESOLUTION = 'ResolvedByAutoResolution';
	/**
	 * Constant for value 'ResolvedByUser'
	 * Meta informations :
	 * 	- documentation : The alert was resolved by user. If the alert requires user action, resolved status means that the user took the necessary action on the alert. If the alert does not require user action, resolved status means that the alert was read by the user.
	 * @return string 'ResolvedByUser'
	 */
	const VALUE_RESOLVEDBYUSER = 'ResolvedByUser';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeMyMessagesAlertResolutionStatusCode
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
		return in_array($_value,array(self::VALUE_UNRESOLVED,self::VALUE_RESOLVEDBYAUTORESOLUTION,self::VALUE_RESOLVEDBYUSER,self::VALUE_CUSTOMCODE));
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