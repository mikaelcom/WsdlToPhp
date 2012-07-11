<?php
/**
 * Class file for OvhTypeSqlpriveStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveStruct
 * @date 02/07/2012
 */
class OvhTypeSqlpriveStruct extends OvhWsdlClass
{
	/**
	 * The server
	 * @var string
	 */
	public $server;
	/**
	 * The expiration
	 * @var string
	 */
	public $expiration;
	/**
	 * The memory
	 * @var string
	 */
	public $memory;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The version
	 * @var string
	 */
	public $version;
	/**
	 * Constructor
	 * @param string server
	 * @param string expiration
	 * @param string memory
	 * @param string ip
	 * @param string type
	 * @param string version
	 * @return OvhTypeSqlpriveStruct
	 */
	public function __construct($_server = null,$_expiration = null,$_memory = null,$_ip = null,$_type = null,$_version = null)
	{
		parent::__construct(array('server'=>$_server,'expiration'=>$_expiration,'memory'=>$_memory,'ip'=>$_ip,'type'=>$_type,'version'=>$_version));
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
	 * Set expiration
	 * @param string expiration
	 * @return string
	 */
	public function setExpiration($_expiration)
	{
		return ($this->expiration = $_expiration);
	}
	/**
	 * Get expiration
	 * @return string
	 */
	public function getExpiration()
	{
		return $this->expiration;
	}
	/**
	 * Set memory
	 * @param string memory
	 * @return string
	 */
	public function setMemory($_memory)
	{
		return ($this->memory = $_memory);
	}
	/**
	 * Get memory
	 * @return string
	 */
	public function getMemory()
	{
		return $this->memory;
	}
	/**
	 * Set ip
	 * @param string ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get ip
	 * @return string
	 */
	public function getIp()
	{
		return $this->ip;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>