<?php
/**
 * Class file for EbayTradingTypeNotificationDeliveryStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNotificationDeliveryStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeNotificationDeliveryStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future internal or external use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'Delivered'
	 * Meta informations :
	 * 	- documentation : Status indicating the notification was delivered
	 * @return string 'Delivered'
	 */
	const VALUE_DELIVERED = 'Delivered';
	/**
	 * Constant for value 'Failed'
	 * Meta informations :
	 * 	- documentation : Status indicating the notification was failed
	 * @return string 'Failed'
	 */
	const VALUE_FAILED = 'Failed';
	/**
	 * Constant for value 'Rejected'
	 * Meta informations :
	 * 	- documentation : Status indicating the notification was rejected
	 * @return string 'Rejected'
	 */
	const VALUE_REJECTED = 'Rejected';
	/**
	 * Constant for value 'MarkedDown'
	 * Meta informations :
	 * 	- documentation : Status indicating the notification was marked down
	 * @return string 'MarkedDown'
	 */
	const VALUE_MARKEDDOWN = 'MarkedDown';
	/**
	 * Constructor
	 * @return EbayTradingTypeNotificationDeliveryStatusCodeType
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
		return in_array($_value,array(self::VALUE_CUSTOMCODE,self::VALUE_DELIVERED,self::VALUE_FAILED,self::VALUE_REJECTED,self::VALUE_MARKEDDOWN));
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