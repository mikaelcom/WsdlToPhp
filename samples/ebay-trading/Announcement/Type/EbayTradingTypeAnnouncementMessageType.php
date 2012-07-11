<?php
/**
 * Class file for EbayTradingTypeAnnouncementMessageType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAnnouncementMessageType
 * Documentation : Event messaging details
 * @date 04/07/2012
 */
class EbayTradingTypeAnnouncementMessageType extends EbayTradingWsdlClass
{
	/**
	 * The AnnouncementStartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date on which an upcoming event can start to be announced.
	 * @var dateTime
	 */
	public $AnnouncementStartTime;
	/**
	 * The EventTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date on which the event occurs. This is also the ending date of the announcement that lead up to the event (see AnnouncementStartTime).
	 * @var dateTime
	 */
	public $EventTime;
	/**
	 * The MessageType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Control of what messages to display.
	 * @var EbayTradingTypeAnnouncementMessageCodeType
	 */
	public $MessageType;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param dateTime AnnouncementStartTime
	 * @param dateTime EventTime
	 * @param EbayTradingTypeAnnouncementMessageCodeType MessageType
	 * @param DOMDocument any
	 * @return EbayTradingTypeAnnouncementMessageType
	 */
	public function __construct($_AnnouncementStartTime = null,$_EventTime = null,$_MessageType = null,$_any = null)
	{
		parent::__construct(array('AnnouncementStartTime'=>$_AnnouncementStartTime,'EventTime'=>$_EventTime,'MessageType'=>$_MessageType,'any'=>$_any));
	}
	/**
	 * Set AnnouncementStartTime
	 * @param dateTime AnnouncementStartTime
	 * @return dateTime
	 */
	public function setAnnouncementStartTime($_AnnouncementStartTime)
	{
		return ($this->AnnouncementStartTime = $_AnnouncementStartTime);
	}
	/**
	 * Get AnnouncementStartTime
	 * @return dateTime
	 */
	public function getAnnouncementStartTime()
	{
		return $this->AnnouncementStartTime;
	}
	/**
	 * Set EventTime
	 * @param dateTime EventTime
	 * @return dateTime
	 */
	public function setEventTime($_EventTime)
	{
		return ($this->EventTime = $_EventTime);
	}
	/**
	 * Get EventTime
	 * @return dateTime
	 */
	public function getEventTime()
	{
		return $this->EventTime;
	}
	/**
	 * Set MessageType
	 * @param AnnouncementMessageCodeType MessageType
	 * @return AnnouncementMessageCodeType
	 */
	public function setMessageType($_MessageType)
	{
		return ($this->MessageType = EbayTradingTypeAnnouncementMessageCodeType::valueIsValid($_MessageType)?$_MessageType:null);
	}
	/**
	 * Get MessageType
	 * @return EbayTradingTypeAnnouncementMessageCodeType
	 */
	public function getMessageType()
	{
		return $this->MessageType;
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