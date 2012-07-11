<?php
/**
 * Class file for EbayTradingTypeGetNotificationPreferencesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetNotificationPreferencesRequestType
 * Documentation : Retrieves the requesting application's notification preferences. Details are only returned for events for which a preference has been set. For example, if you enabled notification for the EndOfAuction event and later disabled it, the GetNotificationPreferences response would cite the EndOfAuction event preference as Disabled. Otherwise, no details would be returned regarding EndOfAuction.
 * @date 04/07/2012
 */
class EbayTradingTypeGetNotificationPreferencesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The PreferenceLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the type of preferences to retrieve. For example, preferences can be associated with a user, with an application, or with events.
	 * @var EbayTradingTypeNotificationRoleCodeType
	 */
	public $PreferenceLevel;
	/**
	 * Constructor
	 * @param EbayTradingTypeNotificationRoleCodeType PreferenceLevel
	 * @return EbayTradingTypeGetNotificationPreferencesRequestType
	 */
	public function __construct($_PreferenceLevel = null)
	{
		EbayTradingWsdlClass::__construct(array('PreferenceLevel'=>$_PreferenceLevel));
	}
	/**
	 * Set PreferenceLevel
	 * @param NotificationRoleCodeType PreferenceLevel
	 * @return NotificationRoleCodeType
	 */
	public function setPreferenceLevel($_PreferenceLevel)
	{
		return ($this->PreferenceLevel = EbayTradingTypeNotificationRoleCodeType::valueIsValid($_PreferenceLevel)?$_PreferenceLevel:null);
	}
	/**
	 * Get PreferenceLevel
	 * @return EbayTradingTypeNotificationRoleCodeType
	 */
	public function getPreferenceLevel()
	{
		return $this->PreferenceLevel;
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