<?php
/**
 * Class file for AmazonEc2TypeDescribeRegionsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeRegionsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeRegionsType extends AmazonEc2WsdlClass
{
	/**
	 * The regionSet
	 * @var AmazonEc2TypeDescribeRegionsSetType
	 */
	public $regionSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeRegionsSetType regionSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeRegionsType
	 */
	public function __construct($_regionSet = null,$_filterSet = null)
	{
		parent::__construct(array('regionSet'=>$_regionSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set regionSet
	 * @param DescribeRegionsSetType regionSet
	 * @return DescribeRegionsSetType
	 */
	public function setRegionSet($_regionSet)
	{
		return ($this->regionSet = $_regionSet);
	}
	/**
	 * Get regionSet
	 * @return AmazonEc2TypeDescribeRegionsSetType
	 */
	public function getRegionSet()
	{
		return $this->regionSet;
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