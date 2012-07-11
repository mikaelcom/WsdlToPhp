<?php
/**
 * Class file for EbayTradingTypeNotificationEventStateCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNotificationEventStateCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeNotificationEventStateCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'New'
	 * Meta informations :
	 * 	- documentation : Status indicating the notification is newly created
	 * @return string 'New'
	 */
	const VALUE_NEW = 'New';
	/**
	 * Constant for value 'Failed'
	 * Meta informations :
	 * 	- documentation : Status indicating the notification was failed
	 * @return string 'Failed'
	 */
	const VALUE_FAILED = 'Failed';
	/**
	 * Constant for value 'MarkedDown'
	 * Meta informations :
	 * 	- documentation : Status indicating the end user application is marked down
	 * @return string 'MarkedDown'
	 */
	const VALUE_MARKEDDOWN = 'MarkedDown';
	/**
	 * Constant for value 'Pending'
	 * Meta informations :
	 * 	- documentation : Status indicating the notification is pending
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'FailedPending'
	 * Meta informations :
	 * 	- documentation : Status indicating the notification is failed pending
	 * @return string 'FailedPending'
	 */
	const VALUE_FAILEDPENDING = 'FailedPending';
	/**
	 * Constant for value 'MarkedDownPending'
	 * Meta informations :
	 * 	- documentation : Status indicating the notification is marked down pending
	 * @return string 'MarkedDownPending'
	 */
	const VALUE_MARKEDDOWNPENDING = 'MarkedDownPending';
	/**
	 * Constant for value 'Delivered'
	 * Meta informations :
	 * 	- documentation : Status indicating the notification was successfully delivered
	 * @return string 'Delivered'
	 */
	const VALUE_DELIVERED = 'Delivered';
	/**
	 * Constant for value 'Undeliverable'
	 * Meta informations :
	 * 	- documentation : Status indicating the notification was unable to deliver
	 * @return string 'Undeliverable'
	 */
	const VALUE_UNDELIVERABLE = 'Undeliverable';
	/**
	 * Constant for value 'Rejected'
	 * Meta informations :
	 * 	- documentation : Status indicating the notification was rejected
	 * @return string 'Rejected'
	 */
	const VALUE_REJECTED = 'Rejected';
	/**
	 * Constant for value 'Canceled'
	 * Meta informations :
	 * 	- documentation : Status indicating the notification was cancelled
	 * @return string 'Canceled'
	 */
	const VALUE_CANCELED = 'Canceled';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future internal or external use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeNotificationEventStateCodeType
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
		return in_array($_value,array(self::VALUE_NEW,self::VALUE_FAILED,self::VALUE_MARKEDDOWN,self::VALUE_PENDING,self::VALUE_FAILEDPENDING,self::VALUE_MARKEDDOWNPENDING,self::VALUE_DELIVERED,self::VALUE_UNDELIVERABLE,self::VALUE_REJECTED,self::VALUE_CANCELED,self::VALUE_CUSTOMCODE));
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