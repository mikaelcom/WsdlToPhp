<?php
/**
 * Class file for EbayTradingTypeGetNotificationPreferencesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetNotificationPreferencesResponseType
 * Documentation : Contains the requesting application's notification preferences. GetNotificationPreferences retrieves preferences that you have deliberately set. For example, if you enable the EndOfAuction event and then later disable it, the response shows the EndOfAuction event preference as Disabled. But if you have never set a preference for the EndOfAuction event, no EndOfAuction preference is returned at all.
 * @date 04/07/2012
 */
class EbayTradingTypeGetNotificationPreferencesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ApplicationDeliveryPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies application-based event preferences that have been enabled.
	 * @var EbayTradingTypeApplicationDeliveryPreferencesType
	 */
	public $ApplicationDeliveryPreferences;
	/**
	 * The DeliveryURLName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies application delivery URL Name associated with this user.
	 * @var string
	 */
	public $DeliveryURLName;
	/**
	 * The UserDeliveryPreferenceArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies user-based event preferences that have been enabled or disabled.
	 * @var EbayTradingTypeNotificationEnableArrayType
	 */
	public $UserDeliveryPreferenceArray;
	/**
	 * The UserData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns user data for notification settings, such as set mobile phone.
	 * @var EbayTradingTypeNotificationUserDataType
	 */
	public $UserData;
	/**
	 * The EventProperty
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains names and values assigned to a notification event. Currently can only be set for wireless applications.
	 * @var EbayTradingTypeNotificationEventPropertyType
	 */
	public $EventProperty;
	/**
	 * Constructor
	 * @param EbayTradingTypeApplicationDeliveryPreferencesType ApplicationDeliveryPreferences
	 * @param string DeliveryURLName
	 * @param EbayTradingTypeNotificationEnableArrayType UserDeliveryPreferenceArray
	 * @param EbayTradingTypeNotificationUserDataType UserData
	 * @param EbayTradingTypeNotificationEventPropertyType EventProperty
	 * @return EbayTradingTypeGetNotificationPreferencesResponseType
	 */
	public function __construct($_ApplicationDeliveryPreferences = null,$_DeliveryURLName = null,$_UserDeliveryPreferenceArray = null,$_UserData = null,$_EventProperty = null)
	{
		EbayTradingWsdlClass::__construct(array('ApplicationDeliveryPreferences'=>$_ApplicationDeliveryPreferences,'DeliveryURLName'=>$_DeliveryURLName,'UserDeliveryPreferenceArray'=>$_UserDeliveryPreferenceArray,'UserData'=>$_UserData,'EventProperty'=>$_EventProperty));
	}
	/**
	 * Set ApplicationDeliveryPreferences
	 * @param ApplicationDeliveryPreferencesType ApplicationDeliveryPreferences
	 * @return ApplicationDeliveryPreferencesType
	 */
	public function setApplicationDeliveryPreferences($_ApplicationDeliveryPreferences)
	{
		return ($this->ApplicationDeliveryPreferences = $_ApplicationDeliveryPreferences);
	}
	/**
	 * Get ApplicationDeliveryPreferences
	 * @return EbayTradingTypeApplicationDeliveryPreferencesType
	 */
	public function getApplicationDeliveryPreferences()
	{
		return $this->ApplicationDeliveryPreferences;
	}
	/**
	 * Set DeliveryURLName
	 * @param string DeliveryURLName
	 * @return string
	 */
	public function setDeliveryURLName($_DeliveryURLName)
	{
		return ($this->DeliveryURLName = $_DeliveryURLName);
	}
	/**
	 * Get DeliveryURLName
	 * @return string
	 */
	public function getDeliveryURLName()
	{
		return $this->DeliveryURLName;
	}
	/**
	 * Set UserDeliveryPreferenceArray
	 * @param NotificationEnableArrayType UserDeliveryPreferenceArray
	 * @return NotificationEnableArrayType
	 */
	public function setUserDeliveryPreferenceArray($_UserDeliveryPreferenceArray)
	{
		return ($this->UserDeliveryPreferenceArray = $_UserDeliveryPreferenceArray);
	}
	/**
	 * Get UserDeliveryPreferenceArray
	 * @return EbayTradingTypeNotificationEnableArrayType
	 */
	public function getUserDeliveryPreferenceArray()
	{
		return $this->UserDeliveryPreferenceArray;
	}
	/**
	 * Set UserData
	 * @param NotificationUserDataType UserData
	 * @return NotificationUserDataType
	 */
	public function setUserData($_UserData)
	{
		return ($this->UserData = $_UserData);
	}
	/**
	 * Get UserData
	 * @return EbayTradingTypeNotificationUserDataType
	 */
	public function getUserData()
	{
		return $this->UserData;
	}
	/**
	 * Set EventProperty
	 * @param NotificationEventPropertyType EventProperty
	 * @return NotificationEventPropertyType
	 */
	public function setEventProperty($_EventProperty)
	{
		return ($this->EventProperty = $_EventProperty);
	}
	/**
	 * Get EventProperty
	 * @return EbayTradingTypeNotificationEventPropertyType
	 */
	public function getEventProperty()
	{
		return $this->EventProperty;
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