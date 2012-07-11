<?php
/**
 * Class file for OvhTypeDedicatedIpLoadBalancingStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedIpLoadBalancingStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedIpLoadBalancingStruct extends OvhWsdlClass
{
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
	 * The active
	 * @var int
	 */
	public $active;
	/**
	 * The inactive
	 * @var int
	 */
	public $inactive;
	/**
	 * The serverList
	 * @var OvhTypeMyArrayOfDedicatedIpLoadBalancingServerStructType
	 */
	public $serverList;
	/**
	 * Constructor
	 * @param string name
	 * @param string ipLoadBalancing
	 * @param int active
	 * @param int inactive
	 * @param OvhTypeMyArrayOfDedicatedIpLoadBalancingServerStructType serverList
	 * @return OvhTypeDedicatedIpLoadBalancingStruct
	 */
	public function __construct($_name = null,$_ipLoadBalancing = null,$_active = null,$_inactive = null,$_serverList = null)
	{
		parent::__construct(array('name'=>$_name,'ipLoadBalancing'=>$_ipLoadBalancing,'active'=>$_active,'inactive'=>$_inactive,'serverList'=>new OvhTypeMyArrayOfDedicatedIpLoadBalancingServerStructType($_serverList)));
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
	 * Set active
	 * @param int active
	 * @return int
	 */
	public function setActive($_active)
	{
		return ($this->active = $_active);
	}
	/**
	 * Get active
	 * @return int
	 */
	public function getActive()
	{
		return $this->active;
	}
	/**
	 * Set inactive
	 * @param int inactive
	 * @return int
	 */
	public function setInactive($_inactive)
	{
		return ($this->inactive = $_inactive);
	}
	/**
	 * Get inactive
	 * @return int
	 */
	public function getInactive()
	{
		return $this->inactive;
	}
	/**
	 * Set serverList
	 * @param MyArrayOfDedicatedIpLoadBalancingServerStructType serverList
	 * @return MyArrayOfDedicatedIpLoadBalancingServerStructType
	 */
	public function setServerList($_serverList)
	{
		return ($this->serverList = $_serverList);
	}
	/**
	 * Get serverList
	 * @return OvhTypeMyArrayOfDedicatedIpLoadBalancingServerStructType
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