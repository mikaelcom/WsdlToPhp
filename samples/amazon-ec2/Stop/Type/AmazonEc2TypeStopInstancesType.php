<?php
/**
 * Class file for AmazonEc2TypeStopInstancesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeStopInstancesType
 * @date 10/07/2012
 */
class AmazonEc2TypeStopInstancesType extends AmazonEc2WsdlClass
{
	/**
	 * The instancesSet
	 * @var AmazonEc2TypeInstanceIdSetType
	 */
	public $instancesSet;
	/**
	 * The force
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $force;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInstanceIdSetType instancesSet
	 * @param boolean force
	 * @return AmazonEc2TypeStopInstancesType
	 */
	public function __construct($_instancesSet = null,$_force = null)
	{
		parent::__construct(array('instancesSet'=>$_instancesSet,'force'=>$_force));
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
	 * Set force
	 * @param boolean force
	 * @return boolean
	 */
	public function setForce($_force)
	{
		return ($this->force = $_force);
	}
	/**
	 * Get force
	 * @return boolean
	 */
	public function getForce()
	{
		return $this->force;
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