<?php
/**
 * Class file for EbayTradingTypeNotificationDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNotificationDetailsType
 * Documentation : Information about a single notification. Notification information includes the reference ID, notification type, current status, time delivered, error code, and error message for the notification. If notification details are included in the response, all of the detail fields are returned.
 * @date 04/07/2012
 */
class EbayTradingTypeNotificationDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The DeliveryURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the destination address for the notification. This is the value set using SetNotificationPreferences.
	 * @var anyURI
	 */
	public $DeliveryURL;
	/**
	 * The ReferenceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reference identifier for the notification.
	 * @var string
	 */
	public $ReferenceID;
	/**
	 * The ExpirationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date and time when this notification will be removed from the eBay system.
	 * @var dateTime
	 */
	public $ExpirationTime;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the notification type. Possible values include: AskSellerQuestion, AuctionCheckoutComplete, BestOffer, CheckoutBuyerRequestTotal, EndOfAuction, Feedback, FixedPriceEndOfTransaction, FixedPriceTransaction, ItemNotReceived, MyMessages, OutBid, SecondChanceOffer, UPIBuyerResponseDispute, UPISellerClosedDispute, UPISellerOpenedDispute, and UPISellerRespondedToDispute.
	 * @var EbayTradingTypeNotificationEventTypeCodeType
	 */
	public $Type;
	/**
	 * The Retries
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the total number of retries for the given notification.
	 * @var int
	 */
	public $Retries;
	/**
	 * The DeliveryStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the notification status. Possible values include Delivered, Failed, Rejected, and MarkedDown.
	 * @var EbayTradingTypeNotificationEventStateCodeType
	 */
	public $DeliveryStatus;
	/**
	 * The NextRetryTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the time when the notification is scheduled for retry. This won't be included if the DeliveryStatus is Delivered.
	 * @var dateTime
	 */
	public $NextRetryTime;
	/**
	 * The DeliveryTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the time when the notification was delivered.
	 * @var dateTime
	 */
	public $DeliveryTime;
	/**
	 * The ErrorMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the error message.
	 * @var string
	 */
	public $ErrorMessage;
	/**
	 * The DeliveryURLName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the delivery URL name for the notification. This is the value set using SetNotificationPreferences.
	 * @var string
	 */
	public $DeliveryURLName;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param anyURI DeliveryURL
	 * @param string ReferenceID
	 * @param dateTime ExpirationTime
	 * @param EbayTradingTypeNotificationEventTypeCodeType Type
	 * @param int Retries
	 * @param EbayTradingTypeNotificationEventStateCodeType DeliveryStatus
	 * @param dateTime NextRetryTime
	 * @param dateTime DeliveryTime
	 * @param string ErrorMessage
	 * @param string DeliveryURLName
	 * @param DOMDocument any
	 * @return EbayTradingTypeNotificationDetailsType
	 */
	public function __construct($_DeliveryURL = null,$_ReferenceID = null,$_ExpirationTime = null,$_Type = null,$_Retries = null,$_DeliveryStatus = null,$_NextRetryTime = null,$_DeliveryTime = null,$_ErrorMessage = null,$_DeliveryURLName = null,$_any = null)
	{
		parent::__construct(array('DeliveryURL'=>$_DeliveryURL,'ReferenceID'=>$_ReferenceID,'ExpirationTime'=>$_ExpirationTime,'Type'=>$_Type,'Retries'=>$_Retries,'DeliveryStatus'=>$_DeliveryStatus,'NextRetryTime'=>$_NextRetryTime,'DeliveryTime'=>$_DeliveryTime,'ErrorMessage'=>$_ErrorMessage,'DeliveryURLName'=>$_DeliveryURLName,'any'=>$_any));
	}
	/**
	 * Set DeliveryURL
	 * @param anyURI DeliveryURL
	 * @return anyURI
	 */
	public function setDeliveryURL($_DeliveryURL)
	{
		return ($this->DeliveryURL = $_DeliveryURL);
	}
	/**
	 * Get DeliveryURL
	 * @return anyURI
	 */
	public function getDeliveryURL()
	{
		return $this->DeliveryURL;
	}
	/**
	 * Set ReferenceID
	 * @param string ReferenceID
	 * @return string
	 */
	public function setReferenceID($_ReferenceID)
	{
		return ($this->ReferenceID = $_ReferenceID);
	}
	/**
	 * Get ReferenceID
	 * @return string
	 */
	public function getReferenceID()
	{
		return $this->ReferenceID;
	}
	/**
	 * Set ExpirationTime
	 * @param dateTime ExpirationTime
	 * @return dateTime
	 */
	public function setExpirationTime($_ExpirationTime)
	{
		return ($this->ExpirationTime = $_ExpirationTime);
	}
	/**
	 * Get ExpirationTime
	 * @return dateTime
	 */
	public function getExpirationTime()
	{
		return $this->ExpirationTime;
	}
	/**
	 * Set Type
	 * @param NotificationEventTypeCodeType Type
	 * @return NotificationEventTypeCodeType
	 */
	public function setType($_Type)
	{
		return ($this->Type = EbayTradingTypeNotificationEventTypeCodeType::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return EbayTradingTypeNotificationEventTypeCodeType
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Retries
	 * @param int Retries
	 * @return int
	 */
	public function setRetries($_Retries)
	{
		return ($this->Retries = $_Retries);
	}
	/**
	 * Get Retries
	 * @return int
	 */
	public function getRetries()
	{
		return $this->Retries;
	}
	/**
	 * Set DeliveryStatus
	 * @param NotificationEventStateCodeType DeliveryStatus
	 * @return NotificationEventStateCodeType
	 */
	public function setDeliveryStatus($_DeliveryStatus)
	{
		return ($this->DeliveryStatus = EbayTradingTypeNotificationEventStateCodeType::valueIsValid($_DeliveryStatus)?$_DeliveryStatus:null);
	}
	/**
	 * Get DeliveryStatus
	 * @return EbayTradingTypeNotificationEventStateCodeType
	 */
	public function getDeliveryStatus()
	{
		return $this->DeliveryStatus;
	}
	/**
	 * Set NextRetryTime
	 * @param dateTime NextRetryTime
	 * @return dateTime
	 */
	public function setNextRetryTime($_NextRetryTime)
	{
		return ($this->NextRetryTime = $_NextRetryTime);
	}
	/**
	 * Get NextRetryTime
	 * @return dateTime
	 */
	public function getNextRetryTime()
	{
		return $this->NextRetryTime;
	}
	/**
	 * Set DeliveryTime
	 * @param dateTime DeliveryTime
	 * @return dateTime
	 */
	public function setDeliveryTime($_DeliveryTime)
	{
		return ($this->DeliveryTime = $_DeliveryTime);
	}
	/**
	 * Get DeliveryTime
	 * @return dateTime
	 */
	public function getDeliveryTime()
	{
		return $this->DeliveryTime;
	}
	/**
	 * Set ErrorMessage
	 * @param string ErrorMessage
	 * @return string
	 */
	public function setErrorMessage($_ErrorMessage)
	{
		return ($this->ErrorMessage = $_ErrorMessage);
	}
	/**
	 * Get ErrorMessage
	 * @return string
	 */
	public function getErrorMessage()
	{
		return $this->ErrorMessage;
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