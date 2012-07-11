<?php
/**
 * Class file for OvhTypeDedicatedIpLoadBalancingNameModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedIpLoadBalancingNameModify
 * @date 02/07/2012
 */
class OvhTypeDedicatedIpLoadBalancingNameModify extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The ipLoadBalancing
	 * @var string
	 */
	public $ipLoadBalancing;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * Constructor
	 * @param string session
	 * @param string ipLoadBalancing
	 * @param string name
	 * @return OvhTypeDedicatedIpLoadBalancingNameModify
	 */
	public function __construct($_session = null,$_ipLoadBalancing = null,$_name = null)
	{
		parent::__construct(array('session'=>$_session,'ipLoadBalancing'=>$_ipLoadBalancing,'name'=>$_name));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>