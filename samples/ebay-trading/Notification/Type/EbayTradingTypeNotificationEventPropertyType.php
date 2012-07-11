<?php
/**
 * Class file for EbayTradingTypeNotificationEventPropertyType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNotificationEventPropertyType
 * Documentation : Defines properties associated with a particular event.
 * @date 04/07/2012
 */
class EbayTradingTypeNotificationEventPropertyType extends EbayTradingWsdlClass
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
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specify property name associated with an particular event.
	 * @var EbayTradingTypeNotificationEventPropertyNameCodeType
	 */
	public $Name;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the value for the property.
	 * @var string
	 */
	public $Value;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeNotificationEventTypeCodeType EventType
	 * @param EbayTradingTypeNotificationEventPropertyNameCodeType Name
	 * @param string Value
	 * @param DOMDocument any
	 * @return EbayTradingTypeNotificationEventPropertyType
	 */
	public function __construct($_EventType = null,$_Name = null,$_Value = null,$_any = null)
	{
		parent::__construct(array('EventType'=>$_EventType,'Name'=>$_Name,'Value'=>$_Value,'any'=>$_any));
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
	 * Set Name
	 * @param NotificationEventPropertyNameCodeType Name
	 * @return NotificationEventPropertyNameCodeType
	 */
	public function setName($_Name)
	{
		return ($this->Name = EbayTradingTypeNotificationEventPropertyNameCodeType::valueIsValid($_Name)?$_Name:null);
	}
	/**
	 * Get Name
	 * @return EbayTradingTypeNotificationEventPropertyNameCodeType
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Value
	 * @param string Value
	 * @return string
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return string
	 */
	public function getValue()
	{
		return $this->Value;
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