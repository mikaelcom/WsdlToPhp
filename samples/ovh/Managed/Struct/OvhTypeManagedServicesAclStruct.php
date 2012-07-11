<?php
/**
 * Class file for OvhTypeManagedServicesAclStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeManagedServicesAclStruct
 * @date 02/07/2012
 */
class OvhTypeManagedServicesAclStruct extends OvhWsdlClass
{
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
	 * The host
	 * @var string
	 */
	public $host;
	/**
	 * Constructor
	 * @param string ip
	 * @param string type
	 * @param string host
	 * @return OvhTypeManagedServicesAclStruct
	 */
	public function __construct($_ip = null,$_type = null,$_host = null)
	{
		parent::__construct(array('ip'=>$_ip,'type'=>$_type,'host'=>$_host));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>