<?php
/**
 * Class file for AmazonEc2TypeDescribeNetworkInterfacesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeNetworkInterfacesType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeNetworkInterfacesType extends AmazonEc2WsdlClass
{
	/**
	 * The networkInterfaceIdSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeNetworkInterfaceIdSetType
	 */
	public $networkInterfaceIdSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeNetworkInterfaceIdSetType networkInterfaceIdSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeNetworkInterfacesType
	 */
	public function __construct($_networkInterfaceIdSet = null,$_filterSet = null)
	{
		parent::__construct(array('networkInterfaceIdSet'=>$_networkInterfaceIdSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set networkInterfaceIdSet
	 * @param NetworkInterfaceIdSetType networkInterfaceIdSet
	 * @return NetworkInterfaceIdSetType
	 */
	public function setNetworkInterfaceIdSet($_networkInterfaceIdSet)
	{
		return ($this->networkInterfaceIdSet = $_networkInterfaceIdSet);
	}
	/**
	 * Get networkInterfaceIdSet
	 * @return AmazonEc2TypeNetworkInterfaceIdSetType
	 */
	public function getNetworkInterfaceIdSet()
	{
		return $this->networkInterfaceIdSet;
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