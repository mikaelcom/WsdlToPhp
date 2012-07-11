<?php
/**
 * Class file for OvhTypeDedicatedIpLoadBalancingDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedIpLoadBalancingDel
 * @date 02/07/2012
 */
class OvhTypeDedicatedIpLoadBalancingDel extends OvhWsdlClass
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
	 * Constructor
	 * @param string session
	 * @param string ipLoadBalancing
	 * @return OvhTypeDedicatedIpLoadBalancingDel
	 */
	public function __construct($_session = null,$_ipLoadBalancing = null)
	{
		parent::__construct(array('session'=>$_session,'ipLoadBalancing'=>$_ipLoadBalancing));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>