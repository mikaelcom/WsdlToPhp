<?php
/**
 * Class file for OvhTypeAccountHistoryReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAccountHistoryReturn
 * @date 02/07/2012
 */
class OvhTypeAccountHistoryReturn extends OvhWsdlClass
{
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
	 * The movements
	 * @var OvhTypeMyArrayOfAccountMovementStructType
	 */
	public $movements;
	/**
	 * Constructor
	 * @param int month
	 * @param int year
	 * @param OvhTypeMyArrayOfAccountMovementStructType movements
	 * @return OvhTypeAccountHistoryReturn
	 */
	public function __construct($_month = null,$_year = null,$_movements = null)
	{
		parent::__construct(array('month'=>$_month,'year'=>$_year,'movements'=>new OvhTypeMyArrayOfAccountMovementStructType($_movements)));
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
	 * Set movements
	 * @param MyArrayOfAccountMovementStructType movements
	 * @return MyArrayOfAccountMovementStructType
	 */
	public function setMovements($_movements)
	{
		return ($this->movements = $_movements);
	}
	/**
	 * Get movements
	 * @return OvhTypeMyArrayOfAccountMovementStructType
	 */
	public function getMovements()
	{
		return $this->movements;
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