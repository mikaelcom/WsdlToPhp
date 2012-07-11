<?php
/**
 * Class file for EbayTradingTypeContactHoursDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeContactHoursDetailsType
 * Documentation : Contains the data for primary and secondary contact hours for a given eBay user.
 * @date 04/07/2012
 */
class EbayTradingTypeContactHoursDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The TimeZoneID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the local time zone of the values provided for Hours1From/Hours1To and Hours2From/Hours2To. If you specify a contact hours time range with Hours1From and Hours1To, you must provide a local time zone. Use GeteBayDetails to retrieve a complete list of the TimeZoneID values supported by eBay.
	 * @var string
	 */
	public $TimeZoneID;
	/**
	 * The Hours1Days
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the range of days for which the primary contact hours specified by Hours1AnyTime or Hours1From and Hours1To apply. If a value of None is provided for this field, the values provided for Hours1AnyTime, Hours1From, Hours1To are ignored.
	 * @var EbayTradingTypeDaysCodeType
	 */
	public $Hours1Days;
	/**
	 * The Hours1AnyTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not a user is available to be contacted 24 hours a day during the range of days specified using the Hours1Days element. True indicates the user is available 24 hours a day, false indicates otherwise. In the case of this field being true, all values provided for Hours1From and Hours1To will be ignored. In the case of this field being false, the values provided Hours1From and Hours1To will be considered.
	 * @var boolean
	 */
	public $Hours1AnyTime;
	/**
	 * The Hours1From
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the starting time of day this eBay user is available for other eBay members to contact for the range of days specified using Hours1Days. Enter times in 30 minute increments from the top of the hour. That is, enter values either on the hour (:00) or 30 minutes past the hour (:30). Other values will be will be rounded down to the next closest 30 minute increment. Times entered should be local to the value provided for TimeZoneID.
	 * @var time
	 */
	public $Hours1From;
	/**
	 * The Hours1To
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the ending time of day this eBay user is available for other eBay members to contact them for the range of days specified using Hours1Days. Enter times in 30 minute increments from the top of the hour. That is, enter values either on the hour (:00) or 30 minutes past the hour (:30). Other values will be will be rounded down to the next closest 30 minute increment. Times entered should be local to the value provided for TimeZoneID.
	 * @var time
	 */
	public $Hours1To;
	/**
	 * The Hours2Days
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the range of days for which the secondary contact hours specified by Hours2AnyTime or Hours2From and Hours2To apply. If a value of None is provided for this field, the values provided for Hours2AnyTime, Hours2From, Hours2To are ignored. <br> <b>Note:</b> You cannot set Hours2Days to EveryDay. If Hours1Days is set to EveryDay, secondary contact hours do not apply. Hours2Days cannot be set to the same value as Hours1Days.
	 * @var EbayTradingTypeDaysCodeType
	 */
	public $Hours2Days;
	/**
	 * The Hours2AnyTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not a user is available to be contacted 24 hours a day during the range of days specified using the Hours2Days element. True indicates the user is available 24 hours a day, false indicates otherwise. In the case of this field being true, all values provided for Hours2From and Hours2To will be ignored. In the case of this field being false, the values provided Hours2From and Hours2To will be considered.
	 * @var boolean
	 */
	public $Hours2AnyTime;
	/**
	 * The Hours2From
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the starting time of day this eBay user is available for other eBay members to contact for the range of days specified using Hours2Days. Enter times in 30 minute increments from the top of the hour. That is, enter values either on the hour (:00) or 30 minutes past the hour (:30). Other values will be will be rounded down to the next closest 30 minute increment. Times entered should be local to the value provided for TimeZoneID.
	 * @var time
	 */
	public $Hours2From;
	/**
	 * The Hours2To
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the ending time of day this eBay user is available for other eBay members to contact them for the range of days specified using Hours1Days. Enter times in 30 minute increments from the top of the hour. That is, enter values either on the hour (:00) or 30 minutes past the hour (:30). Other values will be will be rounded down to the next closest 30 minute increment. Times entered should be local to the value provided for TimeZoneID.
	 * @var time
	 */
	public $Hours2To;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string TimeZoneID
	 * @param EbayTradingTypeDaysCodeType Hours1Days
	 * @param boolean Hours1AnyTime
	 * @param time Hours1From
	 * @param time Hours1To
	 * @param EbayTradingTypeDaysCodeType Hours2Days
	 * @param boolean Hours2AnyTime
	 * @param time Hours2From
	 * @param time Hours2To
	 * @param DOMDocument any
	 * @return EbayTradingTypeContactHoursDetailsType
	 */
	public function __construct($_TimeZoneID = null,$_Hours1Days = null,$_Hours1AnyTime = null,$_Hours1From = null,$_Hours1To = null,$_Hours2Days = null,$_Hours2AnyTime = null,$_Hours2From = null,$_Hours2To = null,$_any = null)
	{
		parent::__construct(array('TimeZoneID'=>$_TimeZoneID,'Hours1Days'=>$_Hours1Days,'Hours1AnyTime'=>$_Hours1AnyTime,'Hours1From'=>$_Hours1From,'Hours1To'=>$_Hours1To,'Hours2Days'=>$_Hours2Days,'Hours2AnyTime'=>$_Hours2AnyTime,'Hours2From'=>$_Hours2From,'Hours2To'=>$_Hours2To,'any'=>$_any));
	}
	/**
	 * Set TimeZoneID
	 * @param string TimeZoneID
	 * @return string
	 */
	public function setTimeZoneID($_TimeZoneID)
	{
		return ($this->TimeZoneID = $_TimeZoneID);
	}
	/**
	 * Get TimeZoneID
	 * @return string
	 */
	public function getTimeZoneID()
	{
		return $this->TimeZoneID;
	}
	/**
	 * Set Hours1Days
	 * @param DaysCodeType Hours1Days
	 * @return DaysCodeType
	 */
	public function setHours1Days($_Hours1Days)
	{
		return ($this->Hours1Days = EbayTradingTypeDaysCodeType::valueIsValid($_Hours1Days)?$_Hours1Days:null);
	}
	/**
	 * Get Hours1Days
	 * @return EbayTradingTypeDaysCodeType
	 */
	public function getHours1Days()
	{
		return $this->Hours1Days;
	}
	/**
	 * Set Hours1AnyTime
	 * @param boolean Hours1AnyTime
	 * @return boolean
	 */
	public function setHours1AnyTime($_Hours1AnyTime)
	{
		return ($this->Hours1AnyTime = $_Hours1AnyTime);
	}
	/**
	 * Get Hours1AnyTime
	 * @return boolean
	 */
	public function getHours1AnyTime()
	{
		return $this->Hours1AnyTime;
	}
	/**
	 * Set Hours1From
	 * @param time Hours1From
	 * @return time
	 */
	public function setHours1From($_Hours1From)
	{
		return ($this->Hours1From = $_Hours1From);
	}
	/**
	 * Get Hours1From
	 * @return time
	 */
	public function getHours1From()
	{
		return $this->Hours1From;
	}
	/**
	 * Set Hours1To
	 * @param time Hours1To
	 * @return time
	 */
	public function setHours1To($_Hours1To)
	{
		return ($this->Hours1To = $_Hours1To);
	}
	/**
	 * Get Hours1To
	 * @return time
	 */
	public function getHours1To()
	{
		return $this->Hours1To;
	}
	/**
	 * Set Hours2Days
	 * @param DaysCodeType Hours2Days
	 * @return DaysCodeType
	 */
	public function setHours2Days($_Hours2Days)
	{
		return ($this->Hours2Days = EbayTradingTypeDaysCodeType::valueIsValid($_Hours2Days)?$_Hours2Days:null);
	}
	/**
	 * Get Hours2Days
	 * @return EbayTradingTypeDaysCodeType
	 */
	public function getHours2Days()
	{
		return $this->Hours2Days;
	}
	/**
	 * Set Hours2AnyTime
	 * @param boolean Hours2AnyTime
	 * @return boolean
	 */
	public function setHours2AnyTime($_Hours2AnyTime)
	{
		return ($this->Hours2AnyTime = $_Hours2AnyTime);
	}
	/**
	 * Get Hours2AnyTime
	 * @return boolean
	 */
	public function getHours2AnyTime()
	{
		return $this->Hours2AnyTime;
	}
	/**
	 * Set Hours2From
	 * @param time Hours2From
	 * @return time
	 */
	public function setHours2From($_Hours2From)
	{
		return ($this->Hours2From = $_Hours2From);
	}
	/**
	 * Get Hours2From
	 * @return time
	 */
	public function getHours2From()
	{
		return $this->Hours2From;
	}
	/**
	 * Set Hours2To
	 * @param time Hours2To
	 * @return time
	 */
	public function setHours2To($_Hours2To)
	{
		return ($this->Hours2To = $_Hours2To);
	}
	/**
	 * Get Hours2To
	 * @return time
	 */
	public function getHours2To()
	{
		return $this->Hours2To;
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