<?php
/**
 * Class file for AmazonEc2TypeDescribeVpcsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeVpcsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeVpcsType extends AmazonEc2WsdlClass
{
	/**
	 * The vpcSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeVpcIdSetType
	 */
	public $vpcSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeVpcIdSetType vpcSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeVpcsType
	 */
	public function __construct($_vpcSet = null,$_filterSet = null)
	{
		parent::__construct(array('vpcSet'=>$_vpcSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set vpcSet
	 * @param VpcIdSetType vpcSet
	 * @return VpcIdSetType
	 */
	public function setVpcSet($_vpcSet)
	{
		return ($this->vpcSet = $_vpcSet);
	}
	/**
	 * Get vpcSet
	 * @return AmazonEc2TypeVpcIdSetType
	 */
	public function getVpcSet()
	{
		return $this->vpcSet;
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