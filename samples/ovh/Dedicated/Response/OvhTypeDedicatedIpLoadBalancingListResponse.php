<?php
/**
 * Class file for OvhTypeDedicatedIpLoadBalancingListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedIpLoadBalancingListResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedIpLoadBalancingListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedIpLoadBalancingStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedIpLoadBalancingStructType return
	 * @return OvhTypeDedicatedIpLoadBalancingListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedIpLoadBalancingStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedIpLoadBalancingStructType return
	 * @return MyArrayOfDedicatedIpLoadBalancingStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedIpLoadBalancingStructType
	 */
	public function getReturn()
	{
		return $this->return;
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