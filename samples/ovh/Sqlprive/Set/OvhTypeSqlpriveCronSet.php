<?php
/**
 * Class file for OvhTypeSqlpriveCronSet
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveCronSet
 * @date 02/07/2012
 */
class OvhTypeSqlpriveCronSet extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The server
	 * @var string
	 */
	public $server;
	/**
	 * The operation
	 * @var string
	 */
	public $operation;
	/**
	 * The recursivityDays
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $recursivityDays;
	/**
	 * The recursivityHours
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $recursivityHours;
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
	 * @param string session
	 * @param string server
	 * @param string operation
	 * @param OvhTypeMyArrayOfStringType recursivityDays
	 * @param OvhTypeMyArrayOfStringType recursivityHours
	 * @param string endDate
	 * @param string comment
	 * @return OvhTypeSqlpriveCronSet
	 */
	public function __construct($_session = null,$_server = null,$_operation = null,$_recursivityDays = null,$_recursivityHours = null,$_endDate = null,$_comment = null)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'operation'=>$_operation,'recursivityDays'=>new OvhTypeMyArrayOfStringType($_recursivityDays),'recursivityHours'=>new OvhTypeMyArrayOfStringType($_recursivityHours),'endDate'=>$_endDate,'comment'=>$_comment));
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
	 * Set server
	 * @param string server
	 * @return string
	 */
	public function setServer($_server)
	{
		return ($this->server = $_server);
	}
	/**
	 * Get server
	 * @return string
	 */
	public function getServer()
	{
		return $this->server;
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
	 * Set recursivityDays
	 * @param MyArrayOfStringType recursivityDays
	 * @return MyArrayOfStringType
	 */
	public function setRecursivityDays($_recursivityDays)
	{
		return ($this->recursivityDays = $_recursivityDays);
	}
	/**
	 * Get recursivityDays
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getRecursivityDays()
	{
		return $this->recursivityDays;
	}
	/**
	 * Set recursivityHours
	 * @param MyArrayOfStringType recursivityHours
	 * @return MyArrayOfStringType
	 */
	public function setRecursivityHours($_recursivityHours)
	{
		return ($this->recursivityHours = $_recursivityHours);
	}
	/**
	 * Get recursivityHours
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getRecursivityHours()
	{
		return $this->recursivityHours;
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