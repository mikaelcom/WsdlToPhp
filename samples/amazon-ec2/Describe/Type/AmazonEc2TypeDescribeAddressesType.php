<?php
/**
 * Class file for AmazonEc2TypeDescribeAddressesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeAddressesType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeAddressesType extends AmazonEc2WsdlClass
{
	/**
	 * The publicIpsSet
	 * @var AmazonEc2TypeDescribeAddressesInfoType
	 */
	public $publicIpsSet;
	/**
	 * The allocationIdsSet
	 * @var AmazonEc2TypeAllocationIdSetType
	 */
	public $allocationIdsSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeAddressesInfoType publicIpsSet
	 * @param AmazonEc2TypeAllocationIdSetType allocationIdsSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeAddressesType
	 */
	public function __construct($_publicIpsSet = null,$_allocationIdsSet = null,$_filterSet = null)
	{
		parent::__construct(array('publicIpsSet'=>$_publicIpsSet,'allocationIdsSet'=>$_allocationIdsSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set publicIpsSet
	 * @param DescribeAddressesInfoType publicIpsSet
	 * @return DescribeAddressesInfoType
	 */
	public function setPublicIpsSet($_publicIpsSet)
	{
		return ($this->publicIpsSet = $_publicIpsSet);
	}
	/**
	 * Get publicIpsSet
	 * @return AmazonEc2TypeDescribeAddressesInfoType
	 */
	public function getPublicIpsSet()
	{
		return $this->publicIpsSet;
	}
	/**
	 * Set allocationIdsSet
	 * @param AllocationIdSetType allocationIdsSet
	 * @return AllocationIdSetType
	 */
	public function setAllocationIdsSet($_allocationIdsSet)
	{
		return ($this->allocationIdsSet = $_allocationIdsSet);
	}
	/**
	 * Get allocationIdsSet
	 * @return AmazonEc2TypeAllocationIdSetType
	 */
	public function getAllocationIdsSet()
	{
		return $this->allocationIdsSet;
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