<?php
/**
 * Class file for AmazonEc2TypeDescribeKeyPairsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeKeyPairsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeKeyPairsType extends AmazonEc2WsdlClass
{
	/**
	 * The keySet
	 * @var AmazonEc2TypeDescribeKeyPairsInfoType
	 */
	public $keySet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeKeyPairsInfoType keySet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeKeyPairsType
	 */
	public function __construct($_keySet = null,$_filterSet = null)
	{
		parent::__construct(array('keySet'=>$_keySet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set keySet
	 * @param DescribeKeyPairsInfoType keySet
	 * @return DescribeKeyPairsInfoType
	 */
	public function setKeySet($_keySet)
	{
		return ($this->keySet = $_keySet);
	}
	/**
	 * Get keySet
	 * @return AmazonEc2TypeDescribeKeyPairsInfoType
	 */
	public function getKeySet()
	{
		return $this->keySet;
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