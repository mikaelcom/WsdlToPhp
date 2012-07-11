<?php
/**
 * Class file for OvhTypeDedicatedBackupGetPlanningStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupGetPlanningStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupGetPlanningStruct extends OvhWsdlClass
{
	/**
	 * The day
	 * @var string
	 */
	public $day;
	/**
	 * The planning
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $planning;
	/**
	 * Constructor
	 * @param string day
	 * @param OvhTypeMyArrayOfStringType planning
	 * @return OvhTypeDedicatedBackupGetPlanningStruct
	 */
	public function __construct($_day = null,$_planning = null)
	{
		parent::__construct(array('day'=>$_day,'planning'=>new OvhTypeMyArrayOfStringType($_planning)));
	}
	/**
	 * Set day
	 * @param string day
	 * @return string
	 */
	public function setDay($_day)
	{
		return ($this->day = $_day);
	}
	/**
	 * Get day
	 * @return string
	 */
	public function getDay()
	{
		return $this->day;
	}
	/**
	 * Set planning
	 * @param MyArrayOfStringType planning
	 * @return MyArrayOfStringType
	 */
	public function setPlanning($_planning)
	{
		return ($this->planning = $_planning);
	}
	/**
	 * Get planning
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getPlanning()
	{
		return $this->planning;
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