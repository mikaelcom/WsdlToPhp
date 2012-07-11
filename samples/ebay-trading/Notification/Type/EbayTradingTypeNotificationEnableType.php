<?php
/**
 * Class file for EbayTradingTypeNotificationEnableType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNotificationEnableType
 * Documentation : Specifies a notification event and whether the notification is enabled or disabled.
 * @date 04/07/2012
 */
class EbayTradingTypeNotificationEnableType extends EbayTradingWsdlClass
{
	/**
	 * The EventType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the notification event.
	 * @var EbayTradingTypeNotificationEventTypeCodeType
	 */
	public $EventType;
	/**
	 * The EventEnable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the event is enabled or disabled.
	 * @var EbayTradingTypeEnableCodeType
	 */
	public $EventEnable;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeNotificationEventTypeCodeType EventType
	 * @param EbayTradingTypeEnableCodeType EventEnable
	 * @param DOMDocument any
	 * @return EbayTradingTypeNotificationEnableType
	 */
	public function __construct($_EventType = null,$_EventEnable = null,$_any = null)
	{
		parent::__construct(array('EventType'=>$_EventType,'EventEnable'=>$_EventEnable,'any'=>$_any));
	}
	/**
	 * Set EventType
	 * @param NotificationEventTypeCodeType EventType
	 * @return NotificationEventTypeCodeType
	 */
	public function setEventType($_EventType)
	{
		return ($this->EventType = EbayTradingTypeNotificationEventTypeCodeType::valueIsValid($_EventType)?$_EventType:null);
	}
	/**
	 * Get EventType
	 * @return EbayTradingTypeNotificationEventTypeCodeType
	 */
	public function getEventType()
	{
		return $this->EventType;
	}
	/**
	 * Set EventEnable
	 * @param EnableCodeType EventEnable
	 * @return EnableCodeType
	 */
	public function setEventEnable($_EventEnable)
	{
		return ($this->EventEnable = EbayTradingTypeEnableCodeType::valueIsValid($_EventEnable)?$_EventEnable:null);
	}
	/**
	 * Get EventEnable
	 * @return EbayTradingTypeEnableCodeType
	 */
	public function getEventEnable()
	{
		return $this->EventEnable;
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