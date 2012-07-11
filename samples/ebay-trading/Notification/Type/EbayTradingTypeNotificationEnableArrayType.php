<?php
/**
 * Class file for EbayTradingTypeNotificationEnableArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNotificationEnableArrayType
 * Documentation : A list of NotificationEnable entries. Each entry specifies one notification and whether it is enabled.
 * @date 04/07/2012
 */
class EbayTradingTypeNotificationEnableArrayType extends EbayTradingWsdlClass
{
	/**
	 * The NotificationEnable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies one notification or alert event and whether it is enabled or disabled. Returned if previously set.
	 * @var EbayTradingTypeNotificationEnableType
	 */
	public $NotificationEnable;
	/**
	 * Constructor
	 * @param EbayTradingTypeNotificationEnableType NotificationEnable
	 * @return EbayTradingTypeNotificationEnableArrayType
	 */
	public function __construct($_NotificationEnable = null)
	{
		parent::__construct(array('NotificationEnable'=>$_NotificationEnable));
	}
	/**
	 * Set NotificationEnable
	 * @param NotificationEnableType NotificationEnable
	 * @return NotificationEnableType
	 */
	public function setNotificationEnable($_NotificationEnable)
	{
		return ($this->NotificationEnable = $_NotificationEnable);
	}
	/**
	 * Get NotificationEnable
	 * @return EbayTradingTypeNotificationEnableType
	 */
	public function getNotificationEnable()
	{
		return $this->NotificationEnable;
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