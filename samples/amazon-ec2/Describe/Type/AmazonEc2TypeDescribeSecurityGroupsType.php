<?php
/**
 * Class file for AmazonEc2TypeDescribeSecurityGroupsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSecurityGroupsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSecurityGroupsType extends AmazonEc2WsdlClass
{
	/**
	 * The securityGroupSet
	 * @var AmazonEc2TypeDescribeSecurityGroupsSetType
	 */
	public $securityGroupSet;
	/**
	 * The securityGroupIdSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeDescribeSecurityGroupsIdSetType
	 */
	public $securityGroupIdSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeSecurityGroupsSetType securityGroupSet
	 * @param AmazonEc2TypeDescribeSecurityGroupsIdSetType securityGroupIdSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeSecurityGroupsType
	 */
	public function __construct($_securityGroupSet = null,$_securityGroupIdSet = null,$_filterSet = null)
	{
		parent::__construct(array('securityGroupSet'=>$_securityGroupSet,'securityGroupIdSet'=>$_securityGroupIdSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set securityGroupSet
	 * @param DescribeSecurityGroupsSetType securityGroupSet
	 * @return DescribeSecurityGroupsSetType
	 */
	public function setSecurityGroupSet($_securityGroupSet)
	{
		return ($this->securityGroupSet = $_securityGroupSet);
	}
	/**
	 * Get securityGroupSet
	 * @return AmazonEc2TypeDescribeSecurityGroupsSetType
	 */
	public function getSecurityGroupSet()
	{
		return $this->securityGroupSet;
	}
	/**
	 * Set securityGroupIdSet
	 * @param DescribeSecurityGroupsIdSetType securityGroupIdSet
	 * @return DescribeSecurityGroupsIdSetType
	 */
	public function setSecurityGroupIdSet($_securityGroupIdSet)
	{
		return ($this->securityGroupIdSet = $_securityGroupIdSet);
	}
	/**
	 * Get securityGroupIdSet
	 * @return AmazonEc2TypeDescribeSecurityGroupsIdSetType
	 */
	public function getSecurityGroupIdSet()
	{
		return $this->securityGroupIdSet;
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