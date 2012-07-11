<?php
/**
 * Class file for AmazonEc2TypeDescribeInstancesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeInstancesType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeInstancesType extends AmazonEc2WsdlClass
{
	/**
	 * The instancesSet
	 * @var AmazonEc2TypeDescribeInstancesInfoType
	 */
	public $instancesSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeInstancesInfoType instancesSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeInstancesType
	 */
	public function __construct($_instancesSet = null,$_filterSet = null)
	{
		parent::__construct(array('instancesSet'=>$_instancesSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set instancesSet
	 * @param DescribeInstancesInfoType instancesSet
	 * @return DescribeInstancesInfoType
	 */
	public function setInstancesSet($_instancesSet)
	{
		return ($this->instancesSet = $_instancesSet);
	}
	/**
	 * Get instancesSet
	 * @return AmazonEc2TypeDescribeInstancesInfoType
	 */
	public function getInstancesSet()
	{
		return $this->instancesSet;
	}
	/**
	 * Set filterSet
	 * @param FilterSetType filterSet
	 * @return FilterSetType
	 */
	public function setFilterSet($_filterSet)
	{
		return ($this->filterSet = $_filterSet);
	}
	/**
	 * Get filterSet
	 * @return AmazonEc2TypeFilterSetType
	 */
	public function getFilterSet()
	{
		return $this->filterSet;
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