<?php
/**
 * Class file for AmazonEc2TypeDescribeInternetGatewaysType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeInternetGatewaysType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeInternetGatewaysType extends AmazonEc2WsdlClass
{
	/**
	 * The internetGatewayIdSet
	 * @var AmazonEc2TypeInternetGatewayIdSetType
	 */
	public $internetGatewayIdSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInternetGatewayIdSetType internetGatewayIdSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeInternetGatewaysType
	 */
	public function __construct($_internetGatewayIdSet = null,$_filterSet = null)
	{
		parent::__construct(array('internetGatewayIdSet'=>$_internetGatewayIdSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set internetGatewayIdSet
	 * @param InternetGatewayIdSetType internetGatewayIdSet
	 * @return InternetGatewayIdSetType
	 */
	public function setInternetGatewayIdSet($_internetGatewayIdSet)
	{
		return ($this->internetGatewayIdSet = $_internetGatewayIdSet);
	}
	/**
	 * Get internetGatewayIdSet
	 * @return AmazonEc2TypeInternetGatewayIdSetType
	 */
	public function getInternetGatewayIdSet()
	{
		return $this->internetGatewayIdSet;
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