<?php
/**
 * Class file for EbayTradingTypeSetNotificationPreferencesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetNotificationPreferencesRequestType
 * Documentation : Manages notification and alert preferences for applications and users.
 * @date 04/07/2012
 */
class EbayTradingTypeSetNotificationPreferencesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ApplicationDeliveryPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies application-level event preferences that have been enabled, including the URL to which notifications should be delivered and whether notifications should be enabled or disabled (although the UserDeliveryPreferenceArray input property specifies specific notification subscriptions).
	 * @var EbayTradingTypeApplicationDeliveryPreferencesType
	 */
	public $ApplicationDeliveryPreferences;
	/**
	 * The UserDeliveryPreferenceArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies events and whether or not they are enabled.
	 * @var EbayTradingTypeNotificationEnableArrayType
	 */
	public $UserDeliveryPreferenceArray;
	/**
	 * The UserData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies user data for notification settings, such as mobile phone number.
	 * @var EbayTradingTypeNotificationUserDataType
	 */
	public $UserData;
	/**
	 * The EventProperty
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Characteristics or details of an event such as type, name and value. Currently can only be set for wireless applications.
	 * @var EbayTradingTypeNotificationEventPropertyType
	 */
	public $EventProperty;
	/**
	 * The DeliveryURLName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies up to 25 ApplicationDeliveryPreferences.DeliveryURLDetails.DeliveryURLName to associate with a user token sent in a SetNotificationPreferences request. To specify multiple DeliveryURLNames, create separate instances of ApplicationDeliveryPreferences.DeliveryURLDetails.DeliveryURLName, and then enable up to 25 DeliveryURLNames by including them in comma-separated format in this field.
	 * @var string
	 */
	public $DeliveryURLName;
	/**
	 * Constructor
	 * @param EbayTradingTypeApplicationDeliveryPreferencesType ApplicationDeliveryPreferences
	 * @param EbayTradingTypeNotificationEnableArrayType UserDeliveryPreferenceArray
	 * @param EbayTradingTypeNotificationUserDataType UserData
	 * @param EbayTradingTypeNotificationEventPropertyType EventProperty
	 * @param string DeliveryURLName
	 * @return EbayTradingTypeSetNotificationPreferencesRequestType
	 */
	public function __construct($_ApplicationDeliveryPreferences = null,$_UserDeliveryPreferenceArray = null,$_UserData = null,$_EventProperty = null,$_DeliveryURLName = null)
	{
		EbayTradingWsdlClass::__construct(array('ApplicationDeliveryPreferences'=>$_ApplicationDeliveryPreferences,'UserDeliveryPreferenceArray'=>$_UserDeliveryPreferenceArray,'UserData'=>$_UserData,'EventProperty'=>$_EventProperty,'DeliveryURLName'=>$_DeliveryURLName));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>