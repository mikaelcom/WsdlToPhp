<?php
/**
 * Class file for AmazonEc2TypeDescribeTagsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeTagsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeTagsType extends AmazonEc2WsdlClass
{
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeTagsType
	 */
	public function __construct($_filterSet = null)
	{
		parent::__construct(array('filterSet'=>$_filterSet));
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