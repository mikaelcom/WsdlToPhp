<?php
/**
 * Class file for EbayTradingTypeMarkUpMarkDownEventType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMarkUpMarkDownEventType
 * Documentation : Describes an individual mark-up or mark-down event. eBay will automatically mark an application as down if attempts to deliver a notification fail repeatedly. eBay may mark an application down manually under certain circumstances.
 * @date 04/07/2012
 */
class EbayTradingTypeMarkUpMarkDownEventType extends EbayTradingWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the application has been marked up or marked down.
	 * @var EbayTradingTypeMarkUpMarkDownEventTypeCodeType
	 */
	public $Type;
	/**
	 * The Time
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Time when the application was marked up or marked down.
	 * @var dateTime
	 */
	public $Time;
	/**
	 * The Reason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Describes how the application was marked down, automatically or manually. When an application is automatically marked down, eBay will ping the application periodically, and if communication is restored, eBay will automatically mark the application up. If your application is marked down manually, you must contact eBay Developer Support to get your application marked up. A Reason is not provided for mark up events.
	 * @var string
	 */
	public $Reason;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeMarkUpMarkDownEventTypeCodeType Type
	 * @param dateTime Time
	 * @param string Reason
	 * @param DOMDocument any
	 * @return EbayTradingTypeMarkUpMarkDownEventType
	 */
	public function __construct($_Type = null,$_Time = null,$_Reason = null,$_any = null)
	{
		parent::__construct(array('Type'=>$_Type,'Time'=>$_Time,'Reason'=>$_Reason,'any'=>$_any));
	}
	/**
	 * Set Type
	 * @param MarkUpMarkDownEventTypeCodeType Type
	 * @return MarkUpMarkDownEventTypeCodeType
	 */
	public function setType($_Type)
	{
		return ($this->Type = EbayTradingTypeMarkUpMarkDownEventTypeCodeType::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return EbayTradingTypeMarkUpMarkDownEventTypeCodeType
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Time
	 * @param dateTime Time
	 * @return dateTime
	 */
	public function setTime($_Time)
	{
		return ($this->Time = $_Time);
	}
	/**
	 * Get Time
	 * @return dateTime
	 */
	public function getTime()
	{
		return $this->Time;
	}
	/**
	 * Set Reason
	 * @param string Reason
	 * @return string
	 */
	public function setReason($_Reason)
	{
		return ($this->Reason = $_Reason);
	}
	/**
	 * Get Reason
	 * @return string
	 */
	public function getReason()
	{
		return $this->Reason;
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