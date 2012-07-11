<?php
/**
 * Class file for OvhTypeSqlpriveCronStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveCronStruct
 * @date 02/07/2012
 */
class OvhTypeSqlpriveCronStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The active
	 * @var string
	 */
	public $active;
	/**
	 * The days
	 * @var string
	 */
	public $days;
	/**
	 * The hours
	 * @var string
	 */
	public $hours;
	/**
	 * The operation
	 * @var string
	 */
	public $operation;
	/**
	 * The endDate
	 * @var string
	 */
	public $endDate;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * Constructor
	 * @param int id
	 * @param string active
	 * @param string days
	 * @param string hours
	 * @param string operation
	 * @param string endDate
	 * @param string comment
	 * @return OvhTypeSqlpriveCronStruct
	 */
	public function __construct($_id = null,$_active = null,$_days = null,$_hours = null,$_operation = null,$_endDate = null,$_comment = null)
	{
		parent::__construct(array('id'=>$_id,'active'=>$_active,'days'=>$_days,'hours'=>$_hours,'operation'=>$_operation,'endDate'=>$_endDate,'comment'=>$_comment));
	}
	/**
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set active
	 * @param string active
	 * @return string
	 */
	public function setActive($_active)
	{
		return ($this->active = $_active);
	}
	/**
	 * Get active
	 * @return string
	 */
	public function getActive()
	{
		return $this->active;
	}
	/**
	 * Set days
	 * @param string days
	 * @return string
	 */
	public function setDays($_days)
	{
		return ($this->days = $_days);
	}
	/**
	 * Get days
	 * @return string
	 */
	public function getDays()
	{
		return $this->days;
	}
	/**
	 * Set hours
	 * @param string hours
	 * @return string
	 */
	public function setHours($_hours)
	{
		return ($this->hours = $_hours);
	}
	/**
	 * Get hours
	 * @return string
	 */
	public function getHours()
	{
		return $this->hours;
	}
	/**
	 * Set operation
	 * @param string operation
	 * @return string
	 */
	public function setOperation($_operation)
	{
		return ($this->operation = $_operation);
	}
	/**
	 * Get operation
	 * @return string
	 */
	public function getOperation()
	{
		return $this->operation;
	}
	/**
	 * Set endDate
	 * @param string endDate
	 * @return string
	 */
	public function setEndDate($_endDate)
	{
		return ($this->endDate = $_endDate);
	}
	/**
	 * Get endDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->endDate;
	}
	/**
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
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