<?php
/**
 * Class file for OvhTypeSupportThreadMessageDetailStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportThreadMessageDetailStruct
 * @date 02/07/2012
 */
class OvhTypeSupportThreadMessageDetailStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The unread
	 * @var int
	 */
	public $unread;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The reportReason
	 * @var string
	 */
	public $reportReason;
	/**
	 * Constructor
	 * @param int id
	 * @param string date
	 * @param int unread
	 * @param string type
	 * @param string reportReason
	 * @return OvhTypeSupportThreadMessageDetailStruct
	 */
	public function __construct($_id = null,$_date = null,$_unread = null,$_type = null,$_reportReason = null)
	{
		parent::__construct(array('id'=>$_id,'date'=>$_date,'unread'=>$_unread,'type'=>$_type,'reportReason'=>$_reportReason));
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
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set unread
	 * @param int unread
	 * @return int
	 */
	public function setUnread($_unread)
	{
		return ($this->unread = $_unread);
	}
	/**
	 * Get unread
	 * @return int
	 */
	public function getUnread()
	{
		return $this->unread;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set reportReason
	 * @param string reportReason
	 * @return string
	 */
	public function setReportReason($_reportReason)
	{
		return ($this->reportReason = $_reportReason);
	}
	/**
	 * Get reportReason
	 * @return string
	 */
	public function getReportReason()
	{
		return $this->reportReason;
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