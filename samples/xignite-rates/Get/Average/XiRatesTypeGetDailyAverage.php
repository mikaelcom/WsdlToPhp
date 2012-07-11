<?php
/**
 * Class file for XiRatesTypeGetDailyAverage
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetDailyAverage
 * @date 08/07/2012
 */
class XiRatesTypeGetDailyAverage extends XiRatesWsdlClass
{
	/**
	 * The RateType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateTypes
	 */
	public $RateType;
	/**
	 * The CalendarDays
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $CalendarDays;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param XiRatesTypeRateTypes RateType
	 * @param int CalendarDays
	 * @param string AsOfDate
	 * @return XiRatesTypeGetDailyAverage
	 */
	public function __construct($_RateType,$_CalendarDays,$_AsOfDate = null)
	{
		parent::__construct(array('RateType'=>$_RateType,'CalendarDays'=>$_CalendarDays,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set RateType
	 * @param RateTypes RateType
	 * @return RateTypes
	 */
	public function setRateType($_RateType)
	{
		return ($this->RateType = XiRatesTypeRateTypes::valueIsValid($_RateType)?$_RateType:null);
	}
	/**
	 * Get RateType
	 * @return XiRatesTypeRateTypes
	 */
	public function getRateType()
	{
		return $this->RateType;
	}
	/**
	 * Set CalendarDays
	 * @param int CalendarDays
	 * @return int
	 */
	public function setCalendarDays($_CalendarDays)
	{
		return ($this->CalendarDays = $_CalendarDays);
	}
	/**
	 * Get CalendarDays
	 * @return int
	 */
	public function getCalendarDays()
	{
		return $this->CalendarDays;
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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