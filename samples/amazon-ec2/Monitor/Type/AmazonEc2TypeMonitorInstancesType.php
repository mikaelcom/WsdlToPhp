<?php
/**
 * Class file for AmazonEc2TypeMonitorInstancesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeMonitorInstancesType
 * @date 10/07/2012
 */
class AmazonEc2TypeMonitorInstancesType extends AmazonEc2WsdlClass
{
	/**
	 * The instancesSet
	 * @var AmazonEc2TypeMonitorInstancesSetType
	 */
	public $instancesSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeMonitorInstancesSetType instancesSet
	 * @return AmazonEc2TypeMonitorInstancesType
	 */
	public function __construct($_instancesSet = null)
	{
		parent::__construct(array('instancesSet'=>$_instancesSet));
	}
	/**
	 * Set instancesSet
	 * @param MonitorInstancesSetType instancesSet
	 * @return MonitorInstancesSetType
	 */
	public function setInstancesSet($_instancesSet)
	{
		return ($this->instancesSet = $_instancesSet);
	}
	/**
	 * Get instancesSet
	 * @return AmazonEc2TypeMonitorInstancesSetType
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