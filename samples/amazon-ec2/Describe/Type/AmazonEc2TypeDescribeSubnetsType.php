<?php
/**
 * Class file for AmazonEc2TypeDescribeSubnetsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSubnetsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSubnetsType extends AmazonEc2WsdlClass
{
	/**
	 * The subnetSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeSubnetIdSetType
	 */
	public $subnetSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeSubnetIdSetType subnetSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeSubnetsType
	 */
	public function __construct($_subnetSet = null,$_filterSet = null)
	{
		parent::__construct(array('subnetSet'=>$_subnetSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set subnetSet
	 * @param SubnetIdSetType subnetSet
	 * @return SubnetIdSetType
	 */
	public function setSubnetSet($_subnetSet)
	{
		return ($this->subnetSet = $_subnetSet);
	}
	/**
	 * Get subnetSet
	 * @return AmazonEc2TypeSubnetIdSetType
	 */
	public function getSubnetSet()
	{
		return $this->subnetSet;
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