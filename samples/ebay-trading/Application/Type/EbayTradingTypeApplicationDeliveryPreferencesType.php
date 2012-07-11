<?php
/**
 * Class file for EbayTradingTypeApplicationDeliveryPreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeApplicationDeliveryPreferencesType
 * Documentation : Specifies preferences about how notifications are delivered to an application.
 * @date 04/07/2012
 */
class EbayTradingTypeApplicationDeliveryPreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The ApplicationURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL to which eBay delivers all notifications sent to the application. For delivery to a server, the URL begins with http:// or https:// and must be well formed. Use a URL that is functional at the time of the call. For delivery to an email address, the URL begins with mailto:// and specifies a valid email address.
	 * @var anyURI
	 */
	public $ApplicationURL;
	/**
	 * The ApplicationEnable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Enables or disables notifications and alerts. If you disable notifications, the application will not receive them, but its notification preferences are preserved.
	 * @var EbayTradingTypeEnableCodeType
	 */
	public $ApplicationEnable;
	/**
	 * The AlertEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The email address to which eBay sends all application markup and markdown event notifications. When setting the email address, input must be in the format mailto://youremailaddress@yoursite.com. Enable these alerts using the AlertEnable field.
	 * @var anyURI
	 */
	public $AlertEmail;
	/**
	 * The AlertEnable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Enables or disables application markup and markdown alerts.
	 * @var EbayTradingTypeEnableCodeType
	 */
	public $AlertEnable;
	/**
	 * The NotificationPayloadType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If this field is specified, the value must be eBLSchemaSOAP.
	 * @var EbayTradingTypeNotificationPayloadTypeCodeType
	 */
	public $NotificationPayloadType;
	/**
	 * The DeviceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The means of receipt of notification. In most cases, it is Platform (typical API calls and web interaction), so this is the default, if not specified. For wireless applications, use SMS. Do not test Client Alerts in production if you are currently using Platform Notifications.
	 * @var EbayTradingTypeDeviceTypeCodeType
	 */
	public $DeviceType;
	/**
	 * The PayloadVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Use this field to specify the API version for all notifications for the calling application. If you do not specify PayloadVersion in SetNotificationPreferences, the API version for notifications will be based on the API version specified in your SetNotificationPreferences call.
	 * @var string
	 */
	public $PayloadVersion;
	/**
	 * The DeliveryURLDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Defines settings for notification URLs (including the URL name in DeliveryURLName). You define settings for up to 25 notification URLs (including the URL name in DeliveryURLName) in separate DeliveryURLDetails containers. Associate a user token with notification URLs by using the token in a SetNotificationPreferences request that specifies the URL name or names in SetNotificationPreferencesRequest.DeliveryURLName. Use comma-separated format to specify multiple URL names in SetNotificationPreferencesRequest.DeliveryURLName. Notifications will be sent to these URL(s) if ApplicationDeliveryPreferencesType.ApplicationEnable is set to Enable.
	 * @var EbayTradingTypeDeliveryURLDetailType
	 */
	public $DeliveryURLDetails;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param anyURI ApplicationURL
	 * @param EbayTradingTypeEnableCodeType ApplicationEnable
	 * @param anyURI AlertEmail
	 * @param EbayTradingTypeEnableCodeType AlertEnable
	 * @param EbayTradingTypeNotificationPayloadTypeCodeType NotificationPayloadType
	 * @param EbayTradingTypeDeviceTypeCodeType DeviceType
	 * @param string PayloadVersion
	 * @param EbayTradingTypeDeliveryURLDetailType DeliveryURLDetails
	 * @param DOMDocument any
	 * @return EbayTradingTypeApplicationDeliveryPreferencesType
	 */
	public function __construct($_ApplicationURL = null,$_ApplicationEnable = null,$_AlertEmail = null,$_AlertEnable = null,$_NotificationPayloadType = null,$_DeviceType = null,$_PayloadVersion = null,$_DeliveryURLDetails = null,$_any = null)
	{
		parent::__construct(array('ApplicationURL'=>$_ApplicationURL,'ApplicationEnable'=>$_ApplicationEnable,'AlertEmail'=>$_AlertEmail,'AlertEnable'=>$_AlertEnable,'NotificationPayloadType'=>$_NotificationPayloadType,'DeviceType'=>$_DeviceType,'PayloadVersion'=>$_PayloadVersion,'DeliveryURLDetails'=>$_DeliveryURLDetails,'any'=>$_any));
	}
	/**
	 * Set ApplicationURL
	 * @param anyURI ApplicationURL
	 * @return anyURI
	 */
	public function setApplicationURL($_ApplicationURL)
	{
		return ($this->ApplicationURL = $_ApplicationURL);
	}
	/**
	 * Get ApplicationURL
	 * @return anyURI
	 */
	public function getApplicationURL()
	{
		return $this->ApplicationURL;
	}
	/**
	 * Set ApplicationEnable
	 * @param EnableCodeType ApplicationEnable
	 * @return EnableCodeType
	 */
	public function setApplicationEnable($_ApplicationEnable)
	{
		return ($this->ApplicationEnable = EbayTradingTypeEnableCodeType::valueIsValid($_ApplicationEnable)?$_ApplicationEnable:null);
	}
	/**
	 * Get ApplicationEnable
	 * @return EbayTradingTypeEnableCodeType
	 */
	public function getApplicationEnable()
	{
		return $this->ApplicationEnable;
	}
	/**
	 * Set AlertEmail
	 * @param anyURI AlertEmail
	 * @return anyURI
	 */
	public function setAlertEmail($_AlertEmail)
	{
		return ($this->AlertEmail = $_AlertEmail);
	}
	/**
	 * Get AlertEmail
	 * @return anyURI
	 */
	public function getAlertEmail()
	{
		return $this->AlertEmail;
	}
	/**
	 * Set AlertEnable
	 * @param EnableCodeType AlertEnable
	 * @return EnableCodeType
	 */
	public function setAlertEnable($_AlertEnable)
	{
		return ($this->AlertEnable = EbayTradingTypeEnableCodeType::valueIsValid($_AlertEnable)?$_AlertEnable:null);
	}
	/**
	 * Get AlertEnable
	 * @return EbayTradingTypeEnableCodeType
	 */
	public function getAlertEnable()
	{
		return $this->AlertEnable;
	}
	/**
	 * Set NotificationPayloadType
	 * @param NotificationPayloadTypeCodeType NotificationPayloadType
	 * @return NotificationPayloadTypeCodeType
	 */
	public function setNotificationPayloadType($_NotificationPayloadType)
	{
		return ($this->NotificationPayloadType = EbayTradingTypeNotificationPayloadTypeCodeType::valueIsValid($_NotificationPayloadType)?$_NotificationPayloadType:null);
	}
	/**
	 * Get NotificationPayloadType
	 * @return EbayTradingTypeNotificationPayloadTypeCodeType
	 */
	public function getNotificationPayloadType()
	{
		return $this->NotificationPayloadType;
	}
	/**
	 * Set DeviceType
	 * @param DeviceTypeCodeType DeviceType
	 * @return DeviceTypeCodeType
	 */
	public function setDeviceType($_DeviceType)
	{
		return ($this->DeviceType = EbayTradingTypeDeviceTypeCodeType::valueIsValid($_DeviceType)?$_DeviceType:null);
	}
	/**
	 * Get DeviceType
	 * @return EbayTradingTypeDeviceTypeCodeType
	 */
	public function getDeviceType()
	{
		return $this->DeviceType;
	}
	/**
	 * Set PayloadVersion
	 * @param string PayloadVersion
	 * @return string
	 */
	public function setPayloadVersion($_PayloadVersion)
	{
		return ($this->PayloadVersion = $_PayloadVersion);
	}
	/**
	 * Get PayloadVersion
	 * @return string
	 */
	public function getPayloadVersion()
	{
		return $this->PayloadVersion;
	}
	/**
	 * Set DeliveryURLDetails
	 * @param DeliveryURLDetailType DeliveryURLDetails
	 * @return DeliveryURLDetailType
	 */
	public function setDeliveryURLDetails($_DeliveryURLDetails)
	{
		return ($this->DeliveryURLDetails = $_DeliveryURLDetails);
	}
	/**
	 * Get DeliveryURLDetails
	 * @return EbayTradingTypeDeliveryURLDetailType
	 */
	public function getDeliveryURLDetails()
	{
		return $this->DeliveryURLDetails;
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