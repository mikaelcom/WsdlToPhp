<?php
/**
 * Class file for AmazonEc2TypeDescribeNetworkAclsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeNetworkAclsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeNetworkAclsType extends AmazonEc2WsdlClass
{
	/**
	 * The networkAclIdSet
	 * @var AmazonEc2TypeNetworkAclIdSetType
	 */
	public $networkAclIdSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeNetworkAclIdSetType networkAclIdSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeNetworkAclsType
	 */
	public function __construct($_networkAclIdSet = null,$_filterSet = null)
	{
		parent::__construct(array('networkAclIdSet'=>$_networkAclIdSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set networkAclIdSet
	 * @param NetworkAclIdSetType networkAclIdSet
	 * @return NetworkAclIdSetType
	 */
	public function setNetworkAclIdSet($_networkAclIdSet)
	{
		return ($this->networkAclIdSet = $_networkAclIdSet);
	}
	/**
	 * Get networkAclIdSet
	 * @return AmazonEc2TypeNetworkAclIdSetType
	 */
	public function getNetworkAclIdSet()
	{
		return $this->networkAclIdSet;
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