<?php
/**
 * Class file for EbayTradingTypeGetNotificationsUsageRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetNotificationsUsageRequestType
 * Documentation : Retrieves usage information about platform notifications for a given application. You can use this notification information to troubleshoot issues with platform notifications. You can call this up to 50 times per hour for a given application.
 * @date 04/07/2012
 */
class EbayTradingTypeGetNotificationsUsageRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the start date and time for which notification information will be retrieved. StartTime is optional. If no StartTime is specified, the default value of 24 hours prior to the call time is used. If no StartTime is specified or if an invalid StartTime is specified, date range errors are returned in the response. For a StartTime to be valid, it must be no more than 72 hours before the time of the call, it cannot be more recent than the EndTime, and it cannot be later than the time of the call. If an invalid StartTime is specified, the default value is used.
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the end date and time for which notification information will be retrieved. EndTime is optional. If no EndTime is specified, the current time (the time the call is made) is used. If no EndTime is specified or if an invalid EndTime is specified, date range errors are returned in the response. For an EndTime to be valid, it must be no more than 72 hours before the time the of the call, it cannot be before the StartTime, and it cannot be later than the time of the call. If an invalid EndTime is specified, the current time is used.
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies an item ID for which detailed notification information will be retrieved. ItemID is optional. If no ItemID is specified, the response will not include any individual notification details.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * Constructor
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @param EbayTradingTypeItemIDType ItemID
	 * @return EbayTradingTypeGetNotificationsUsageRequestType
	 */
	public function __construct($_StartTime = null,$_EndTime = null,$_ItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'ItemID'=>$_ItemID));
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
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
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