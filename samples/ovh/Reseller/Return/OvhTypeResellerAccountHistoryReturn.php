<?php
/**
 * Class file for OvhTypeResellerAccountHistoryReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeResellerAccountHistoryReturn
 * @date 02/07/2012
 */
class OvhTypeResellerAccountHistoryReturn extends OvhWsdlClass
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
	 * @var OvhTypeMyArrayOfResellerAccountMovementStructType
	 */
	public $movements;
	/**
	 * Constructor
	 * @param int month
	 * @param int year
	 * @param OvhTypeMyArrayOfResellerAccountMovementStructType movements
	 * @return OvhTypeResellerAccountHistoryReturn
	 */
	public function __construct($_month = null,$_year = null,$_movements = null)
	{
		parent::__construct(array('month'=>$_month,'year'=>$_year,'movements'=>new OvhTypeMyArrayOfResellerAccountMovementStructType($_movements)));
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
	 * @param MyArrayOfResellerAccountMovementStructType movements
	 * @return MyArrayOfResellerAccountMovementStructType
	 */
	public function setMovements($_movements)
	{
		return ($this->movements = $_movements);
	}
	/**
	 * Get movements
	 * @return OvhTypeMyArrayOfResellerAccountMovementStructType
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