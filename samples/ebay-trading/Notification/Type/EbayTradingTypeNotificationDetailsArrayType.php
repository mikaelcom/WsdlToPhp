<?php
/**
 * Class file for EbayTradingTypeNotificationDetailsArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNotificationDetailsArrayType
 * Documentation : Returns information about notifications sent to the given application for the given ItemID. It will only be returned if ItemID was specified in the input parameters.
 * @date 04/07/2012
 */
class EbayTradingTypeNotificationDetailsArrayType extends EbayTradingWsdlClass
{
	/**
	 * The NotificationDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : List of notifications, if there are any, for the given ItemID and given time period.
	 * @var EbayTradingTypeNotificationDetailsType
	 */
	public $NotificationDetails;
	/**
	 * Constructor
	 * @param EbayTradingTypeNotificationDetailsType NotificationDetails
	 * @return EbayTradingTypeNotificationDetailsArrayType
	 */
	public function __construct($_NotificationDetails = null)
	{
		parent::__construct(array('NotificationDetails'=>$_NotificationDetails));
	}
	/**
	 * Set NotificationDetails
	 * @param NotificationDetailsType NotificationDetails
	 * @return NotificationDetailsType
	 */
	public function setNotificationDetails($_NotificationDetails)
	{
		return ($this->NotificationDetails = $_NotificationDetails);
	}
	/**
	 * Get NotificationDetails
	 * @return EbayTradingTypeNotificationDetailsType
	 */
	public function getNotificationDetails()
	{
		return $this->NotificationDetails;
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