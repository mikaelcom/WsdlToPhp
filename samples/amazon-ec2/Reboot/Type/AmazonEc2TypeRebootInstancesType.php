<?php
/**
 * Class file for AmazonEc2TypeRebootInstancesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRebootInstancesType
 * @date 10/07/2012
 */
class AmazonEc2TypeRebootInstancesType extends AmazonEc2WsdlClass
{
	/**
	 * The instancesSet
	 * @var AmazonEc2TypeRebootInstancesInfoType
	 */
	public $instancesSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeRebootInstancesInfoType instancesSet
	 * @return AmazonEc2TypeRebootInstancesType
	 */
	public function __construct($_instancesSet = null)
	{
		parent::__construct(array('instancesSet'=>$_instancesSet));
	}
	/**
	 * Set instancesSet
	 * @param RebootInstancesInfoType instancesSet
	 * @return RebootInstancesInfoType
	 */
	public function setInstancesSet($_instancesSet)
	{
		return ($this->instancesSet = $_instancesSet);
	}
	/**
	 * Get instancesSet
	 * @return AmazonEc2TypeRebootInstancesInfoType
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