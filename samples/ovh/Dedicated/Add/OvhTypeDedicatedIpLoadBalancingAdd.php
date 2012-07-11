<?php
/**
 * Class file for OvhTypeDedicatedIpLoadBalancingAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedIpLoadBalancingAdd
 * @date 02/07/2012
 */
class OvhTypeDedicatedIpLoadBalancingAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The ipLoadBalancing
	 * @var string
	 */
	public $ipLoadBalancing;
	/**
	 * The serverList
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $serverList;
	/**
	 * Constructor
	 * @param string session
	 * @param string name
	 * @param string ipLoadBalancing
	 * @param OvhTypeMyArrayOfStringType serverList
	 * @return OvhTypeDedicatedIpLoadBalancingAdd
	 */
	public function __construct($_session = null,$_name = null,$_ipLoadBalancing = null,$_serverList = null)
	{
		parent::__construct(array('session'=>$_session,'name'=>$_name,'ipLoadBalancing'=>$_ipLoadBalancing,'serverList'=>new OvhTypeMyArrayOfStringType($_serverList)));
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
	 * Set ipLoadBalancing
	 * @param string ipLoadBalancing
	 * @return string
	 */
	public function setIpLoadBalancing($_ipLoadBalancing)
	{
		return ($this->ipLoadBalancing = $_ipLoadBalancing);
	}
	/**
	 * Get ipLoadBalancing
	 * @return string
	 */
	public function getIpLoadBalancing()
	{
		return $this->ipLoadBalancing;
	}
	/**
	 * Set serverList
	 * @param MyArrayOfStringType serverList
	 * @return MyArrayOfStringType
	 */
	public function setServerList($_serverList)
	{
		return ($this->serverList = $_serverList);
	}
	/**
	 * Get serverList
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getServerList()
	{
		return $this->serverList;
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