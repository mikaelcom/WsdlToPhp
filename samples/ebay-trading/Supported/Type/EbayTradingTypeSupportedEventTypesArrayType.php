<?php
/**
 * Class file for EbayTradingTypeSupportedEventTypesArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSupportedEventTypesArrayType
 * Documentation : 
 * @date 04/07/2012
 */
class EbayTradingTypeSupportedEventTypesArrayType extends EbayTradingWsdlClass
{
	/**
	 * The EventType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : 
	 * @var EbayTradingTypeNotificationEventTypeCodeType
	 */
	public $EventType;
	/**
	 * Constructor
	 * @param EbayTradingTypeNotificationEventTypeCodeType EventType
	 * @return EbayTradingTypeSupportedEventTypesArrayType
	 */
	public function __construct($_EventType = null)
	{
		parent::__construct(array('EventType'=>$_EventType));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>