<?php
/**
 * Class file for EbayTradingTypeGetNotificationsUsageResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetNotificationsUsageResponseType
 * Documentation : Returns an array of notifications sent to a given application identified by the appID (comes in the credentials). The result can be used by third-party developers troubleshoot issues with notifications. Zero, one or many notifications can be returned in the array. The set of notifications returned is limited to those that were sent between the StartTime and EndTime specified in the request. If StartTime or EndTime filters were not found in the request, then the response will contain the data for only one day (Now-1day). By default, maximum duration is limited to 3 days (Now-3days). These min (1day) and max(3days) applies to Notifications,MarkDownMarkUpHistory and NotificationStatistics. Notifications are sent only if the ItemID is included in the request. If there is no ItemID, then only Statistics and MarkDownMarkUpHistory information is included.
 * @date 04/07/2012
 */
class EbayTradingTypeGetNotificationsUsageResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the start date and time for the notification information that is returned by this call. The oldest date allowed for this field is Now-3days. Default is Now-1day.
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the end date and time for the notification information that is returned by this call. The default is Now.
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The NotificationDetailsArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : List of notification objects representing the notifications sent to an application for the given time period. It will only be returned if ItemID was specified in the input request.
	 * @var EbayTradingTypeNotificationDetailsArrayType
	 */
	public $NotificationDetailsArray;
	/**
	 * The MarkUpMarkDownHistory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : List of objects representing MarkUp or MarkDown history for a given appID and for given StartTime and EndTime. This node will always be returned.
	 * @var EbayTradingTypeMarkUpMarkDownHistoryType
	 */
	public $MarkUpMarkDownHistory;
	/**
	 * The NotificationStatistics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Summary information about number of notifications that were successfully delivered, queued, failed, connection attempts made, connection timeouts, http errors for the given appID and given time period. By default, statistics for only one day (Now-1day) is included. Maximum time duration allowed is 3 days (Now-3days).
	 * @var EbayTradingTypeNotificationStatisticsType
	 */
	public $NotificationStatistics;
	/**
	 * Constructor
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @param EbayTradingTypeNotificationDetailsArrayType NotificationDetailsArray
	 * @param EbayTradingTypeMarkUpMarkDownHistoryType MarkUpMarkDownHistory
	 * @param EbayTradingTypeNotificationStatisticsType NotificationStatistics
	 * @return EbayTradingTypeGetNotificationsUsageResponseType
	 */
	public function __construct($_StartTime = null,$_EndTime = null,$_NotificationDetailsArray = null,$_MarkUpMarkDownHistory = null,$_NotificationStatistics = null)
	{
		EbayTradingWsdlClass::__construct(array('StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'NotificationDetailsArray'=>$_NotificationDetailsArray,'MarkUpMarkDownHistory'=>$_MarkUpMarkDownHistory,'NotificationStatistics'=>$_NotificationStatistics));
	}
	/**
	 * Set StartTime
	 * @param dateTime StartTime
	 * @return dateTime
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set EndTime
	 * @param dateTime EndTime
	 * @return dateTime
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return dateTime
	 */
	public function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * Set NotificationDetailsArray
	 * @param NotificationDetailsArrayType NotificationDetailsArray
	 * @return NotificationDetailsArrayType
	 */
	public function setNotificationDetailsArray($_NotificationDetailsArray)
	{
		return ($this->NotificationDetailsArray = $_NotificationDetailsArray);
	}
	/**
	 * Get NotificationDetailsArray
	 * @return EbayTradingTypeNotificationDetailsArrayType
	 */
	public function getNotificationDetailsArray()
	{
		return $this->NotificationDetailsArray;
	}
	/**
	 * Set MarkUpMarkDownHistory
	 * @param MarkUpMarkDownHistoryType MarkUpMarkDownHistory
	 * @return MarkUpMarkDownHistoryType
	 */
	public function setMarkUpMarkDownHistory($_MarkUpMarkDownHistory)
	{
		return ($this->MarkUpMarkDownHistory = $_MarkUpMarkDownHistory);
	}
	/**
	 * Get MarkUpMarkDownHistory
	 * @return EbayTradingTypeMarkUpMarkDownHistoryType
	 */
	public function getMarkUpMarkDownHistory()
	{
		return $this->MarkUpMarkDownHistory;
	}
	/**
	 * Set NotificationStatistics
	 * @param NotificationStatisticsType NotificationStatistics
	 * @return NotificationStatisticsType
	 */
	public function setNotificationStatistics($_NotificationStatistics)
	{
		return ($this->NotificationStatistics = $_NotificationStatistics);
	}
	/**
	 * Get NotificationStatistics
	 * @return EbayTradingTypeNotificationStatisticsType
	 */
	public function getNotificationStatistics()
	{
		return $this->NotificationStatistics;
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