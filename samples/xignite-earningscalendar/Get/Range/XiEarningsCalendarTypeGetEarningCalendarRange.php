<?php
/**
 * Class file for XiEarningsCalendarTypeGetEarningCalendarRange
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeGetEarningCalendarRange
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeGetEarningCalendarRange extends XiEarningsCalendarWsdlClass
{
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
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
	 * @param string StartDate
	 * @param string EndDate
	 * @param double MinimumMarketCap
	 * @return XiEarningsCalendarTypeGetEarningCalendarRange
	 */
	public function __construct($_StartDate = null,$_EndDate = null,$_MinimumMarketCap)
	{
		parent::__construct(array('StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'MinimumMarketCap'=>$_MinimumMarketCap));
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
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