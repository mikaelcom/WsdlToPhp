<?php
/**
 * Class file for OvhTypeDedicatedBandwidthManagementReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBandwidthManagementReturn
 * @date 02/07/2012
 */
class OvhTypeDedicatedBandwidthManagementReturn extends OvhWsdlClass
{
	/**
	 * The serverName
	 * @var string
	 */
	public $serverName;
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * Constructor
	 * @param string serverName
	 * @param int id
	 * @param string status
	 * @param string date
	 * @return OvhTypeDedicatedBandwidthManagementReturn
	 */
	public function __construct($_serverName = null,$_id = null,$_status = null,$_date = null)
	{
		parent::__construct(array('serverName'=>$_serverName,'id'=>$_id,'status'=>$_status,'date'=>$_date));
	}
	/**
	 * Set serverName
	 * @param string serverName
	 * @return string
	 */
	public function setServerName($_serverName)
	{
		return ($this->serverName = $_serverName);
	}
	/**
	 * Get serverName
	 * @return string
	 */
	public function getServerName()
	{
		return $this->serverName;
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
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>