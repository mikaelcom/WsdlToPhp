<?php
/**
 * Class file for XiEarningsCalendarTypeGetEarningCalendarDay
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeGetEarningCalendarDay
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeGetEarningCalendarDay extends XiEarningsCalendarWsdlClass
{
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The MinimumMarketCap
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MinimumMarketCap;
	/**
	 * Constructor
	 * @param string AsOfDate
	 * @param double MinimumMarketCap
	 * @return XiEarningsCalendarTypeGetEarningCalendarDay
	 */
	public function __construct($_AsOfDate = null,$_MinimumMarketCap)
	{
		parent::__construct(array('AsOfDate'=>$_AsOfDate,'MinimumMarketCap'=>$_MinimumMarketCap));
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
	 * Set MinimumMarketCap
	 * @param double MinimumMarketCap
	 * @return double
	 */
	public function setMinimumMarketCap($_MinimumMarketCap)
	{
		return ($this->MinimumMarketCap = $_MinimumMarketCap);
	}
	/**
	 * Get MinimumMarketCap
	 * @return double
	 */
	public function getMinimumMarketCap()
	{
		return $this->MinimumMarketCap;
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