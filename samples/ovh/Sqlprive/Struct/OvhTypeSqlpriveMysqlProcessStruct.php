<?php
/**
 * Class file for OvhTypeSqlpriveMysqlProcessStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveMysqlProcessStruct
 * @date 02/07/2012
 */
class OvhTypeSqlpriveMysqlProcessStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The user
	 * @var string
	 */
	public $user;
	/**
	 * The host
	 * @var string
	 */
	public $host;
	/**
	 * The database
	 * @var string
	 */
	public $database;
	/**
	 * The query
	 * @var string
	 */
	public $query;
	/**
	 * The time
	 * @var string
	 */
	public $time;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The request
	 * @var string
	 */
	public $request;
	/**
	 * Constructor
	 * @param int id
	 * @param string user
	 * @param string host
	 * @param string database
	 * @param string query
	 * @param string time
	 * @param string state
	 * @param string request
	 * @return OvhTypeSqlpriveMysqlProcessStruct
	 */
	public function __construct($_id = null,$_user = null,$_host = null,$_database = null,$_query = null,$_time = null,$_state = null,$_request = null)
	{
		parent::__construct(array('id'=>$_id,'user'=>$_user,'host'=>$_host,'database'=>$_database,'query'=>$_query,'time'=>$_time,'state'=>$_state,'request'=>$_request));
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
	 * Set user
	 * @param string user
	 * @return string
	 */
	public function setUser($_user)
	{
		return ($this->user = $_user);
	}
	/**
	 * Get user
	 * @return string
	 */
	public function getUser()
	{
		return $this->user;
	}
	/**
	 * Set host
	 * @param string host
	 * @return string
	 */
	public function setHost($_host)
	{
		return ($this->host = $_host);
	}
	/**
	 * Get host
	 * @return string
	 */
	public function getHost()
	{
		return $this->host;
	}
	/**
	 * Set database
	 * @param string database
	 * @return string
	 */
	public function setDatabase($_database)
	{
		return ($this->database = $_database);
	}
	/**
	 * Get database
	 * @return string
	 */
	public function getDatabase()
	{
		return $this->database;
	}
	/**
	 * Set query
	 * @param string query
	 * @return string
	 */
	public function setQuery($_query)
	{
		return ($this->query = $_query);
	}
	/**
	 * Get query
	 * @return string
	 */
	public function getQuery()
	{
		return $this->query;
	}
	/**
	 * Set time
	 * @param string time
	 * @return string
	 */
	public function setTime($_time)
	{
		return ($this->time = $_time);
	}
	/**
	 * Get time
	 * @return string
	 */
	public function getTime()
	{
		return $this->time;
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
	 * Set request
	 * @param string request
	 * @return string
	 */
	public function setRequest($_request)
	{
		return ($this->request = $_request);
	}
	/**
	 * Get request
	 * @return string
	 */
	public function getRequest()
	{
		return $this->request;
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