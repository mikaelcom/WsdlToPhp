<?php
/**
 * Class file for EbayTradingTypeScheduleType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeScheduleType
 * Documentation : Sellers create live auction catalogs and schedule their live auction events by using the eBay Live Auctions Web site user interface. The seller can create a catalog in the Live Auctions system several months before a sale.
 * @date 04/07/2012
 */
class EbayTradingTypeScheduleType extends EbayTradingWsdlClass
{
	/**
	 * The ScheduleID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifier for an event schedule in the seller's Live Auctions catalog.
	 * @var int
	 */
	public $ScheduleID;
	/**
	 * The ScheduleTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date and time that the sale schedule starts.
	 * @var dateTime
	 */
	public $ScheduleTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int ScheduleID
	 * @param dateTime ScheduleTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeScheduleType
	 */
	public function __construct($_ScheduleID = null,$_ScheduleTime = null,$_any = null)
	{
		parent::__construct(array('ScheduleID'=>$_ScheduleID,'ScheduleTime'=>$_ScheduleTime,'any'=>$_any));
	}
	/**
	 * Set ScheduleID
	 * @param int ScheduleID
	 * @return int
	 */
	public function setScheduleID($_ScheduleID)
	{
		return ($this->ScheduleID = $_ScheduleID);
	}
	/**
	 * Get ScheduleID
	 * @return int
	 */
	public function getScheduleID()
	{
		return $this->ScheduleID;
	}
	/**
	 * Set ScheduleTime
	 * @param dateTime ScheduleTime
	 * @return dateTime
	 */
	public function setScheduleTime($_ScheduleTime)
	{
		return ($this->ScheduleTime = $_ScheduleTime);
	}
	/**
	 * Get ScheduleTime
	 * @return dateTime
	 */
	public function getScheduleTime()
	{
		return $this->ScheduleTime;
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