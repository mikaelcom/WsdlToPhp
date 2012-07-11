<?php
/**
 * Class file for OvhTypeAccountHistory
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAccountHistory
 * @date 02/07/2012
 */
class OvhTypeAccountHistory extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The month
	 * @var int
	 */
	public $month;
	/**
	 * The year
	 * @var int
	 */
	public $year;
	/**
	 * Constructor
	 * @param string session
	 * @param int month
	 * @param int year
	 * @return OvhTypeAccountHistory
	 */
	public function __construct($_session = null,$_month = null,$_year = null)
	{
		parent::__construct(array('session'=>$_session,'month'=>$_month,'year'=>$_year));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set month
	 * @param int month
	 * @return int
	 */
	public function setMonth($_month)
	{
		return ($this->month = $_month);
	}
	/**
	 * Get month
	 * @return int
	 */
	public function getMonth()
	{
		return $this->month;
	}
	/**
	 * Set year
	 * @param int year
	 * @return int
	 */
	public function setYear($_year)
	{
		return ($this->year = $_year);
	}
	/**
	 * Get year
	 * @return int
	 */
	public function getYear()
	{
		return $this->year;
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