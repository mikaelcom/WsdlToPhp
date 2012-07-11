<?php
/**
 * Class file for EbayTradingTypeSellingManagerAutoListAccordingToScheduleType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerAutoListAccordingToScheduleType
 * Documentation : Defines the options available for an Automated Listing Rule that keeps a fixed number of items on the site
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerAutoListAccordingToScheduleType extends EbayTradingWsdlClass
{
	/**
	 * The DayOfWeek
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The day of the week on which items should be listed.
	 * @var EbayTradingTypeDayOfWeekCodeType
	 */
	public $DayOfWeek;
	/**
	 * The ListingPeriodInWeeks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of weeks between rule executions.
	 * @var int
	 */
	public $ListingPeriodInWeeks;
	/**
	 * The ListAtSpecificTimeOfDay
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The time at which items should be listed.
	 * @var time
	 */
	public $ListAtSpecificTimeOfDay;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date from which the rule is active.
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date after which the rule is disabled.
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The MaxActiveItemCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of current, listed items required for the rule to no longer be run.
	 * @var int
	 */
	public $MaxActiveItemCount;
	/**
	 * The ListingHoldInventoryLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sets a minimum inventory level for listings of associated products to occur.
	 * @var int
	 */
	public $ListingHoldInventoryLevel;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeDayOfWeekCodeType DayOfWeek
	 * @param int ListingPeriodInWeeks
	 * @param time ListAtSpecificTimeOfDay
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @param int MaxActiveItemCount
	 * @param int ListingHoldInventoryLevel
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerAutoListAccordingToScheduleType
	 */
	public function __construct($_DayOfWeek = null,$_ListingPeriodInWeeks = null,$_ListAtSpecificTimeOfDay = null,$_StartTime = null,$_EndTime = null,$_MaxActiveItemCount = null,$_ListingHoldInventoryLevel = null,$_any = null)
	{
		parent::__construct(array('DayOfWeek'=>$_DayOfWeek,'ListingPeriodInWeeks'=>$_ListingPeriodInWeeks,'ListAtSpecificTimeOfDay'=>$_ListAtSpecificTimeOfDay,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'MaxActiveItemCount'=>$_MaxActiveItemCount,'ListingHoldInventoryLevel'=>$_ListingHoldInventoryLevel,'any'=>$_any));
	}
	/**
	 * Set DayOfWeek
	 * @param DayOfWeekCodeType DayOfWeek
	 * @return DayOfWeekCodeType
	 */
	public function setDayOfWeek($_DayOfWeek)
	{
		return ($this->DayOfWeek = EbayTradingTypeDayOfWeekCodeType::valueIsValid($_DayOfWeek)?$_DayOfWeek:null);
	}
	/**
	 * Get DayOfWeek
	 * @return EbayTradingTypeDayOfWeekCodeType
	 */
	public function getDayOfWeek()
	{
		return $this->DayOfWeek;
	}
	/**
	 * Set ListingPeriodInWeeks
	 * @param int ListingPeriodInWeeks
	 * @return int
	 */
	public function setListingPeriodInWeeks($_ListingPeriodInWeeks)
	{
		return ($this->ListingPeriodInWeeks = $_ListingPeriodInWeeks);
	}
	/**
	 * Get ListingPeriodInWeeks
	 * @return int
	 */
	public function getListingPeriodInWeeks()
	{
		return $this->ListingPeriodInWeeks;
	}
	/**
	 * Set ListAtSpecificTimeOfDay
	 * @param time ListAtSpecificTimeOfDay
	 * @return time
	 */
	public function setListAtSpecificTimeOfDay($_ListAtSpecificTimeOfDay)
	{
		return ($this->ListAtSpecificTimeOfDay = $_ListAtSpecificTimeOfDay);
	}
	/**
	 * Get ListAtSpecificTimeOfDay
	 * @return time
	 */
	public function getListAtSpecificTimeOfDay()
	{
		return $this->ListAtSpecificTimeOfDay;
	}
	/**
	 * Set StartTime
	 * @param dateTime StartTime
	 * @return dateTime
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set EndTime
	 * @param dateTime EndTime
	 * @return dateTime
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return dateTime
	 */
	public function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * Set MaxActiveItemCount
	 * @param int MaxActiveItemCount
	 * @return int
	 */
	public function setMaxActiveItemCount($_MaxActiveItemCount)
	{
		return ($this->MaxActiveItemCount = $_MaxActiveItemCount);
	}
	/**
	 * Get MaxActiveItemCount
	 * @return int
	 */
	public function getMaxActiveItemCount()
	{
		return $this->MaxActiveItemCount;
	}
	/**
	 * Set ListingHoldInventoryLevel
	 * @param int ListingHoldInventoryLevel
	 * @return int
	 */
	public function setListingHoldInventoryLevel($_ListingHoldInventoryLevel)
	{
		return ($this->ListingHoldInventoryLevel = $_ListingHoldInventoryLevel);
	}
	/**
	 * Get ListingHoldInventoryLevel
	 * @return int
	 */
	public function getListingHoldInventoryLevel()
	{
		return $this->ListingHoldInventoryLevel;
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