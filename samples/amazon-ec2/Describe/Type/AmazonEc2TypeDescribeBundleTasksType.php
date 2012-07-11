<?php
/**
 * Class file for AmazonEc2TypeDescribeBundleTasksType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeBundleTasksType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeBundleTasksType extends AmazonEc2WsdlClass
{
	/**
	 * The bundlesSet
	 * @var AmazonEc2TypeDescribeBundleTasksInfoType
	 */
	public $bundlesSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeBundleTasksInfoType bundlesSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeBundleTasksType
	 */
	public function __construct($_bundlesSet = null,$_filterSet = null)
	{
		parent::__construct(array('bundlesSet'=>$_bundlesSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set bundlesSet
	 * @param DescribeBundleTasksInfoType bundlesSet
	 * @return DescribeBundleTasksInfoType
	 */
	public function setBundlesSet($_bundlesSet)
	{
		return ($this->bundlesSet = $_bundlesSet);
	}
	/**
	 * Get bundlesSet
	 * @return AmazonEc2TypeDescribeBundleTasksInfoType
	 */
	public function getBundlesSet()
	{
		return $this->bundlesSet;
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