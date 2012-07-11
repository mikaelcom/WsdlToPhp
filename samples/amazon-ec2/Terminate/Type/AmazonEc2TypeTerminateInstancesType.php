<?php
/**
 * Class file for AmazonEc2TypeTerminateInstancesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeTerminateInstancesType
 * @date 10/07/2012
 */
class AmazonEc2TypeTerminateInstancesType extends AmazonEc2WsdlClass
{
	/**
	 * The instancesSet
	 * @var AmazonEc2TypeInstanceIdSetType
	 */
	public $instancesSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInstanceIdSetType instancesSet
	 * @return AmazonEc2TypeTerminateInstancesType
	 */
	public function __construct($_instancesSet = null)
	{
		parent::__construct(array('instancesSet'=>$_instancesSet));
	}
	/**
	 * Set instancesSet
	 * @param InstanceIdSetType instancesSet
	 * @return InstanceIdSetType
	 */
	public function setInstancesSet($_instancesSet)
	{
		return ($this->instancesSet = $_instancesSet);
	}
	/**
	 * Get instancesSet
	 * @return AmazonEc2TypeInstanceIdSetType
	 */
	public function getInstancesSet()
	{
		return $this->instancesSet;
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