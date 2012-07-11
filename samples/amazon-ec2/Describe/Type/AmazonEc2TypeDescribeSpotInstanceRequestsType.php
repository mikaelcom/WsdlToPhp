<?php
/**
 * Class file for AmazonEc2TypeDescribeSpotInstanceRequestsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSpotInstanceRequestsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSpotInstanceRequestsType extends AmazonEc2WsdlClass
{
	/**
	 * The spotInstanceRequestIdSet
	 * @var AmazonEc2TypeSpotInstanceRequestIdSetType
	 */
	public $spotInstanceRequestIdSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeSpotInstanceRequestIdSetType spotInstanceRequestIdSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeSpotInstanceRequestsType
	 */
	public function __construct($_spotInstanceRequestIdSet = null,$_filterSet = null)
	{
		parent::__construct(array('spotInstanceRequestIdSet'=>$_spotInstanceRequestIdSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set spotInstanceRequestIdSet
	 * @param SpotInstanceRequestIdSetType spotInstanceRequestIdSet
	 * @return SpotInstanceRequestIdSetType
	 */
	public function setSpotInstanceRequestIdSet($_spotInstanceRequestIdSet)
	{
		return ($this->spotInstanceRequestIdSet = $_spotInstanceRequestIdSet);
	}
	/**
	 * Get spotInstanceRequestIdSet
	 * @return AmazonEc2TypeSpotInstanceRequestIdSetType
	 */
	public function getSpotInstanceRequestIdSet()
	{
		return $this->spotInstanceRequestIdSet;
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