<?php
/**
 * Class file for OvhTypeDedicatedFilterIrcRuleStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedFilterIrcRuleStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedFilterIrcRuleStruct extends OvhWsdlClass
{
	/**
	 * The fromIp
	 * @var string
	 */
	public $fromIp;
	/**
	 * The fromPort
	 * @var string
	 */
	public $fromPort;
	/**
	 * The toIp
	 * @var string
	 */
	public $toIp;
	/**
	 * The toPort
	 * @var string
	 */
	public $toPort;
	/**
	 * Constructor
	 * @param string fromIp
	 * @param string fromPort
	 * @param string toIp
	 * @param string toPort
	 * @return OvhTypeDedicatedFilterIrcRuleStruct
	 */
	public function __construct($_fromIp = null,$_fromPort = null,$_toIp = null,$_toPort = null)
	{
		parent::__construct(array('fromIp'=>$_fromIp,'fromPort'=>$_fromPort,'toIp'=>$_toIp,'toPort'=>$_toPort));
	}
	/**
	 * Set fromIp
	 * @param string fromIp
	 * @return string
	 */
	public function setFromIp($_fromIp)
	{
		return ($this->fromIp = $_fromIp);
	}
	/**
	 * Get fromIp
	 * @return string
	 */
	public function getFromIp()
	{
		return $this->fromIp;
	}
	/**
	 * Set fromPort
	 * @param string fromPort
	 * @return string
	 */
	public function setFromPort($_fromPort)
	{
		return ($this->fromPort = $_fromPort);
	}
	/**
	 * Get fromPort
	 * @return string
	 */
	public function getFromPort()
	{
		return $this->fromPort;
	}
	/**
	 * Set toIp
	 * @param string toIp
	 * @return string
	 */
	public function setToIp($_toIp)
	{
		return ($this->toIp = $_toIp);
	}
	/**
	 * Get toIp
	 * @return string
	 */
	public function getToIp()
	{
		return $this->toIp;
	}
	/**
	 * Set toPort
	 * @param string toPort
	 * @return string
	 */
	public function setToPort($_toPort)
	{
		return ($this->toPort = $_toPort);
	}
	/**
	 * Get toPort
	 * @return string
	 */
	public function getToPort()
	{
		return $this->toPort;
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