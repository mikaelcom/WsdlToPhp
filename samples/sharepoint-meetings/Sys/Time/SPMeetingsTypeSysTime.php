<?php
/**
 * Class file for SPMeetingsTypeSysTime
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeSysTime
 * @date 06/07/2012
 */
class SPMeetingsTypeSysTime extends SPMeetingsWsdlClass
{
	/**
	 * The year
	 * @var unsignedShort
	 */
	public $year;
	/**
	 * The month
	 * @var unsignedShort
	 */
	public $month;
	/**
	 * The dayOfWeek
	 * @var unsignedShort
	 */
	public $dayOfWeek;
	/**
	 * The day
	 * @var unsignedShort
	 */
	public $day;
	/**
	 * The hour
	 * @var unsignedShort
	 */
	public $hour;
	/**
	 * The minute
	 * @var unsignedShort
	 */
	public $minute;
	/**
	 * The second
	 * @var unsignedShort
	 */
	public $second;
	/**
	 * The milliseconds
	 * @var unsignedShort
	 */
	public $milliseconds;
	/**
	 * Constructor
	 * @param unsignedShort year
	 * @param unsignedShort month
	 * @param unsignedShort dayOfWeek
	 * @param unsignedShort day
	 * @param unsignedShort hour
	 * @param unsignedShort minute
	 * @param unsignedShort second
	 * @param unsignedShort milliseconds
	 * @return SPMeetingsTypeSysTime
	 */
	public function __construct($_year = null,$_month = null,$_dayOfWeek = null,$_day = null,$_hour = null,$_minute = null,$_second = null,$_milliseconds = null)
	{
		parent::__construct(array('year'=>$_year,'month'=>$_month,'dayOfWeek'=>$_dayOfWeek,'day'=>$_day,'hour'=>$_hour,'minute'=>$_minute,'second'=>$_second,'milliseconds'=>$_milliseconds));
	}
	/**
	 * Set year
	 * @param unsignedShort year
	 * @return unsignedShort
	 */
	public function setYear($_year)
	{
		return ($this->year = $_year);
	}
	/**
	 * Get year
	 * @return unsignedShort
	 */
	public function getYear()
	{
		return $this->year;
	}
	/**
	 * Set month
	 * @param unsignedShort month
	 * @return unsignedShort
	 */
	public function setMonth($_month)
	{
		return ($this->month = $_month);
	}
	/**
	 * Get month
	 * @return unsignedShort
	 */
	public function getMonth()
	{
		return $this->month;
	}
	/**
	 * Set dayOfWeek
	 * @param unsignedShort dayOfWeek
	 * @return unsignedShort
	 */
	public function setDayOfWeek($_dayOfWeek)
	{
		return ($this->dayOfWeek = $_dayOfWeek);
	}
	/**
	 * Get dayOfWeek
	 * @return unsignedShort
	 */
	public function getDayOfWeek()
	{
		return $this->dayOfWeek;
	}
	/**
	 * Set day
	 * @param unsignedShort day
	 * @return unsignedShort
	 */
	public function setDay($_day)
	{
		return ($this->day = $_day);
	}
	/**
	 * Get day
	 * @return unsignedShort
	 */
	public function getDay()
	{
		return $this->day;
	}
	/**
	 * Set hour
	 * @param unsignedShort hour
	 * @return unsignedShort
	 */
	public function setHour($_hour)
	{
		return ($this->hour = $_hour);
	}
	/**
	 * Get hour
	 * @return unsignedShort
	 */
	public function getHour()
	{
		return $this->hour;
	}
	/**
	 * Set minute
	 * @param unsignedShort minute
	 * @return unsignedShort
	 */
	public function setMinute($_minute)
	{
		return ($this->minute = $_minute);
	}
	/**
	 * Get minute
	 * @return unsignedShort
	 */
	public function getMinute()
	{
		return $this->minute;
	}
	/**
	 * Set second
	 * @param unsignedShort second
	 * @return unsignedShort
	 */
	public function setSecond($_second)
	{
		return ($this->second = $_second);
	}
	/**
	 * Get second
	 * @return unsignedShort
	 */
	public function getSecond()
	{
		return $this->second;
	}
	/**
	 * Set milliseconds
	 * @param unsignedShort milliseconds
	 * @return unsignedShort
	 */
	public function setMilliseconds($_milliseconds)
	{
		return ($this->milliseconds = $_milliseconds);
	}
	/**
	 * Get milliseconds
	 * @return unsignedShort
	 */
	public function getMilliseconds()
	{
		return $this->milliseconds;
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