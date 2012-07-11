<?php
/**
 * Class file for OvhTypeNsStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeNsStruct
 * @date 02/07/2012
 */
class OvhTypeNsStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * Constructor
	 * @param string name
	 * @param string ip
	 * @return OvhTypeNsStruct
	 */
	public function __construct($_name = null,$_ip = null)
	{
		parent::__construct(array('name'=>$_name,'ip'=>$_ip));
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>