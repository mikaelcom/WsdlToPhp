<?php
/**
 * Class file for EbayTradingTypeSummaryEventScheduleType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSummaryEventScheduleType
 * Documentation : Details about a summary event schedule.
 * @date 04/07/2012
 */
class EbayTradingTypeSummaryEventScheduleType extends EbayTradingWsdlClass
{
	/**
	 * The EventType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The event type associated with this alert.
	 * @var EbayTradingTypeNotificationEventTypeCodeType
	 */
	public $EventType;
	/**
	 * The SummaryPeriod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The period of time for which to create a summary.
	 * @var EbayTradingTypeSummaryWindowPeriodCodeType
	 */
	public $SummaryPeriod;
	/**
	 * The Frequency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : How often the summary is to be delivered.
	 * @var EbayTradingTypeSummaryFrequencyCodeType
	 */
	public $Frequency;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeNotificationEventTypeCodeType EventType
	 * @param EbayTradingTypeSummaryWindowPeriodCodeType SummaryPeriod
	 * @param EbayTradingTypeSummaryFrequencyCodeType Frequency
	 * @param DOMDocument any
	 * @return EbayTradingTypeSummaryEventScheduleType
	 */
	public function __construct($_EventType = null,$_SummaryPeriod = null,$_Frequency = null,$_any = null)
	{
		parent::__construct(array('EventType'=>$_EventType,'SummaryPeriod'=>$_SummaryPeriod,'Frequency'=>$_Frequency,'any'=>$_any));
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
	 * Set SummaryPeriod
	 * @param SummaryWindowPeriodCodeType SummaryPeriod
	 * @return SummaryWindowPeriodCodeType
	 */
	public function setSummaryPeriod($_SummaryPeriod)
	{
		return ($this->SummaryPeriod = EbayTradingTypeSummaryWindowPeriodCodeType::valueIsValid($_SummaryPeriod)?$_SummaryPeriod:null);
	}
	/**
	 * Get SummaryPeriod
	 * @return EbayTradingTypeSummaryWindowPeriodCodeType
	 */
	public function getSummaryPeriod()
	{
		return $this->SummaryPeriod;
	}
	/**
	 * Set Frequency
	 * @param SummaryFrequencyCodeType Frequency
	 * @return SummaryFrequencyCodeType
	 */
	public function setFrequency($_Frequency)
	{
		return ($this->Frequency = EbayTradingTypeSummaryFrequencyCodeType::valueIsValid($_Frequency)?$_Frequency:null);
	}
	/**
	 * Get Frequency
	 * @return EbayTradingTypeSummaryFrequencyCodeType
	 */
	public function getFrequency()
	{
		return $this->Frequency;
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