<?php
/**
 * Class file for EbayTradingTypeSMSSubscriptionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSMSSubscriptionType
 * Documentation : User data related to notifications. Note that SMS is currently reserved for future use.
 * @date 04/07/2012
 */
class EbayTradingTypeSMSSubscriptionType extends EbayTradingWsdlClass
{
	/**
	 * The SMSPhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The wireless phone number to be used for receiving SMS messages. Max length of phone number varies by country.
	 * @var string
	 */
	public $SMSPhone;
	/**
	 * The UserStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Registered/Unregistered/Pending.
	 * @var EbayTradingTypeSMSSubscriptionUserStatusCodeType
	 */
	public $UserStatus;
	/**
	 * The CarrierID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The wireless carrier ID.
	 * @var EbayTradingTypeWirelessCarrierIDCodeType
	 */
	public $CarrierID;
	/**
	 * The ErrorCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reason for SMS subscription error (postback from thired-party integrator).
	 * @var EbayTradingTypeSMSSubscriptionErrorCodeCodeType
	 */
	public $ErrorCode;
	/**
	 * The ItemToUnsubscribe
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of item to unsubscribe from SMS notification.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemToUnsubscribe;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string SMSPhone
	 * @param EbayTradingTypeSMSSubscriptionUserStatusCodeType UserStatus
	 * @param EbayTradingTypeWirelessCarrierIDCodeType CarrierID
	 * @param EbayTradingTypeSMSSubscriptionErrorCodeCodeType ErrorCode
	 * @param EbayTradingTypeItemIDType ItemToUnsubscribe
	 * @param DOMDocument any
	 * @return EbayTradingTypeSMSSubscriptionType
	 */
	public function __construct($_SMSPhone = null,$_UserStatus = null,$_CarrierID = null,$_ErrorCode = null,$_ItemToUnsubscribe = null,$_any = null)
	{
		parent::__construct(array('SMSPhone'=>$_SMSPhone,'UserStatus'=>$_UserStatus,'CarrierID'=>$_CarrierID,'ErrorCode'=>$_ErrorCode,'ItemToUnsubscribe'=>$_ItemToUnsubscribe,'any'=>$_any));
	}
	/**
	 * Set SMSPhone
	 * @param string SMSPhone
	 * @return string
	 */
	public function setSMSPhone($_SMSPhone)
	{
		return ($this->SMSPhone = $_SMSPhone);
	}
	/**
	 * Get SMSPhone
	 * @return string
	 */
	public function getSMSPhone()
	{
		return $this->SMSPhone;
	}
	/**
	 * Set UserStatus
	 * @param SMSSubscriptionUserStatusCodeType UserStatus
	 * @return SMSSubscriptionUserStatusCodeType
	 */
	public function setUserStatus($_UserStatus)
	{
		return ($this->UserStatus = EbayTradingTypeSMSSubscriptionUserStatusCodeType::valueIsValid($_UserStatus)?$_UserStatus:null);
	}
	/**
	 * Get UserStatus
	 * @return EbayTradingTypeSMSSubscriptionUserStatusCodeType
	 */
	public function getUserStatus()
	{
		return $this->UserStatus;
	}
	/**
	 * Set CarrierID
	 * @param WirelessCarrierIDCodeType CarrierID
	 * @return WirelessCarrierIDCodeType
	 */
	public function setCarrierID($_CarrierID)
	{
		return ($this->CarrierID = EbayTradingTypeWirelessCarrierIDCodeType::valueIsValid($_CarrierID)?$_CarrierID:null);
	}
	/**
	 * Get CarrierID
	 * @return EbayTradingTypeWirelessCarrierIDCodeType
	 */
	public function getCarrierID()
	{
		return $this->CarrierID;
	}
	/**
	 * Set ErrorCode
	 * @param SMSSubscriptionErrorCodeCodeType ErrorCode
	 * @return SMSSubscriptionErrorCodeCodeType
	 */
	public function setErrorCode($_ErrorCode)
	{
		return ($this->ErrorCode = EbayTradingTypeSMSSubscriptionErrorCodeCodeType::valueIsValid($_ErrorCode)?$_ErrorCode:null);
	}
	/**
	 * Get ErrorCode
	 * @return EbayTradingTypeSMSSubscriptionErrorCodeCodeType
	 */
	public function getErrorCode()
	{
		return $this->ErrorCode;
	}
	/**
	 * Set ItemToUnsubscribe
	 * @param ItemIDType ItemToUnsubscribe
	 * @return ItemIDType
	 */
	public function setItemToUnsubscribe($_ItemToUnsubscribe)
	{
		return ($this->ItemToUnsubscribe = EbayTradingTypeItemIDType::valueIsValid($_ItemToUnsubscribe)?$_ItemToUnsubscribe:null);
	}
	/**
	 * Get ItemToUnsubscribe
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemToUnsubscribe()
	{
		return $this->ItemToUnsubscribe;
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