<?php
/**
 * Class file for XiEarningsCalendarTypeEarningDates
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeEarningDates
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeEarningDates extends XiEarningsCalendarTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeSecurity
	 */
	public $Security;
	/**
	 * The Q1EarningDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Q1EarningDate;
	/**
	 * The Q2EarningDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Q2EarningDate;
	/**
	 * The Q3EarningDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Q3EarningDate;
	/**
	 * The Q4EarningDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Q4EarningDate;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeSecurity Security
	 * @param string Q1EarningDate
	 * @param string Q2EarningDate
	 * @param string Q3EarningDate
	 * @param string Q4EarningDate
	 * @return XiEarningsCalendarTypeEarningDates
	 */
	public function __construct($_Security = null,$_Q1EarningDate = null,$_Q2EarningDate = null,$_Q3EarningDate = null,$_Q4EarningDate = null)
	{
		XiEarningsCalendarWsdlClass::__construct(array('Security'=>$_Security,'Q1EarningDate'=>$_Q1EarningDate,'Q2EarningDate'=>$_Q2EarningDate,'Q3EarningDate'=>$_Q3EarningDate,'Q4EarningDate'=>$_Q4EarningDate));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiEarningsCalendarTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Q1EarningDate
	 * @param string Q1EarningDate
	 * @return string
	 */
	public function setQ1EarningDate($_Q1EarningDate)
	{
		return ($this->Q1EarningDate = $_Q1EarningDate);
	}
	/**
	 * Get Q1EarningDate
	 * @return string
	 */
	public function getQ1EarningDate()
	{
		return $this->Q1EarningDate;
	}
	/**
	 * Set Q2EarningDate
	 * @param string Q2EarningDate
	 * @return string
	 */
	public function setQ2EarningDate($_Q2EarningDate)
	{
		return ($this->Q2EarningDate = $_Q2EarningDate);
	}
	/**
	 * Get Q2EarningDate
	 * @return string
	 */
	public function getQ2EarningDate()
	{
		return $this->Q2EarningDate;
	}
	/**
	 * Set Q3EarningDate
	 * @param string Q3EarningDate
	 * @return string
	 */
	public function setQ3EarningDate($_Q3EarningDate)
	{
		return ($this->Q3EarningDate = $_Q3EarningDate);
	}
	/**
	 * Get Q3EarningDate
	 * @return string
	 */
	public function getQ3EarningDate()
	{
		return $this->Q3EarningDate;
	}
	/**
	 * Set Q4EarningDate
	 * @param string Q4EarningDate
	 * @return string
	 */
	public function setQ4EarningDate($_Q4EarningDate)
	{
		return ($this->Q4EarningDate = $_Q4EarningDate);
	}
	/**
	 * Get Q4EarningDate
	 * @return string
	 */
	public function getQ4EarningDate()
	{
		return $this->Q4EarningDate;
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