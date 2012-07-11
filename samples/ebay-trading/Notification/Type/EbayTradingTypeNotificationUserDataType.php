<?php
/**
 * Class file for EbayTradingTypeNotificationUserDataType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNotificationUserDataType
 * Documentation : User data related to notifications.
 * @date 04/07/2012
 */
class EbayTradingTypeNotificationUserDataType extends EbayTradingWsdlClass
{
	/**
	 * The SMSSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : User data related to SMS notifications. SMS is currently reserved for future use.
	 * @var EbayTradingTypeSMSSubscriptionType
	 */
	public $SMSSubscription;
	/**
	 * The SummarySchedule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : User account activity summary alert delivery schedule. Returned if PreferenceLevel is set to UserData in GetNotificationPreferences. See "Working with Platform Notifications" for instructions on "Informational Alerts".
	 * @var EbayTradingTypeSummaryEventScheduleType
	 */
	public $SummarySchedule;
	/**
	 * The ExternalUserData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An application subscribing to notifications can include an XML-compliant string, not to exceed 256 characters, which will be returned in the notification payload. The string can contain user-specific information to identify a particular user. Any sensitive information should be passed with due caution and proper encryption.
	 * @var string
	 */
	public $ExternalUserData;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSMSSubscriptionType SMSSubscription
	 * @param EbayTradingTypeSummaryEventScheduleType SummarySchedule
	 * @param string ExternalUserData
	 * @param DOMDocument any
	 * @return EbayTradingTypeNotificationUserDataType
	 */
	public function __construct($_SMSSubscription = null,$_SummarySchedule = null,$_ExternalUserData = null,$_any = null)
	{
		parent::__construct(array('SMSSubscription'=>$_SMSSubscription,'SummarySchedule'=>$_SummarySchedule,'ExternalUserData'=>$_ExternalUserData,'any'=>$_any));
	}
	/**
	 * Set SMSSubscription
	 * @param SMSSubscriptionType SMSSubscription
	 * @return SMSSubscriptionType
	 */
	public function setSMSSubscription($_SMSSubscription)
	{
		return ($this->SMSSubscription = $_SMSSubscription);
	}
	/**
	 * Get SMSSubscription
	 * @return EbayTradingTypeSMSSubscriptionType
	 */
	public function getSMSSubscription()
	{
		return $this->SMSSubscription;
	}
	/**
	 * Set SummarySchedule
	 * @param SummaryEventScheduleType SummarySchedule
	 * @return SummaryEventScheduleType
	 */
	public function setSummarySchedule($_SummarySchedule)
	{
		return ($this->SummarySchedule = $_SummarySchedule);
	}
	/**
	 * Get SummarySchedule
	 * @return EbayTradingTypeSummaryEventScheduleType
	 */
	public function getSummarySchedule()
	{
		return $this->SummarySchedule;
	}
	/**
	 * Set ExternalUserData
	 * @param string ExternalUserData
	 * @return string
	 */
	public function setExternalUserData($_ExternalUserData)
	{
		return ($this->ExternalUserData = $_ExternalUserData);
	}
	/**
	 * Get ExternalUserData
	 * @return string
	 */
	public function getExternalUserData()
	{
		return $this->ExternalUserData;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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