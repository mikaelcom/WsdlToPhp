<?php
/**
 * Class file for OvhTypeDatabaseStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDatabaseStruct
 * @date 02/07/2012
 */
class OvhTypeDatabaseStruct extends OvhWsdlClass
{
	/**
	 * The db
	 * @var string
	 */
	public $db;
	/**
	 * The quota
	 * @var float
	 */
	public $quota;
	/**
	 * The limit
	 * @var float
	 */
	public $limit;
	/**
	 * The version
	 * @var string
	 */
	public $version;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The server
	 * @var string
	 */
	public $server;
	/**
	 * The todo
	 * @var boolean
	 */
	public $todo;
	/**
	 * The quota_warning
	 * @var boolean
	 */
	public $quota_warning;
	/**
	 * Constructor
	 * @param string db
	 * @param float quota
	 * @param float limit
	 * @param string version
	 * @param string date
	 * @param string state
	 * @param string type
	 * @param string server
	 * @param boolean todo
	 * @param boolean quota_warning
	 * @return OvhTypeDatabaseStruct
	 */
	public function __construct($_db = null,$_quota = null,$_limit = null,$_version = null,$_date = null,$_state = null,$_type = null,$_server = null,$_todo = null,$_quota_warning = null)
	{
		parent::__construct(array('db'=>$_db,'quota'=>$_quota,'limit'=>$_limit,'version'=>$_version,'date'=>$_date,'state'=>$_state,'type'=>$_type,'server'=>$_server,'todo'=>$_todo,'quota_warning'=>$_quota_warning));
	}
	/**
	 * Set db
	 * @param string db
	 * @return string
	 */
	public function setDb($_db)
	{
		return ($this->db = $_db);
	}
	/**
	 * Get db
	 * @return string
	 */
	public function getDb()
	{
		return $this->db;
	}
	/**
	 * Set quota
	 * @param float quota
	 * @return float
	 */
	public function setQuota($_quota)
	{
		return ($this->quota = $_quota);
	}
	/**
	 * Get quota
	 * @return float
	 */
	public function getQuota()
	{
		return $this->quota;
	}
	/**
	 * Set limit
	 * @param float limit
	 * @return float
	 */
	public function setLimit($_limit)
	{
		return ($this->limit = $_limit);
	}
	/**
	 * Get limit
	 * @return float
	 */
	public function getLimit()
	{
		return $this->limit;
	}
	/**
	 * Set version
	 * @param string version
	 * @return string
	 */
	public function setVersion($_version)
	{
		return ($this->version = $_version);
	}
	/**
	 * Get version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->version;
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
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
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
	 * Set todo
	 * @param boolean todo
	 * @return boolean
	 */
	public function setTodo($_todo)
	{
		return ($this->todo = $_todo);
	}
	/**
	 * Get todo
	 * @return boolean
	 */
	public function getTodo()
	{
		return $this->todo;
	}
	/**
	 * Set quota_warning
	 * @param boolean quota_warning
	 * @return boolean
	 */
	public function setQuota_warning($_quota_warning)
	{
		return ($this->quota_warning = $_quota_warning);
	}
	/**
	 * Get quota_warning
	 * @return boolean
	 */
	public function getQuota_warning()
	{
		return $this->quota_warning;
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