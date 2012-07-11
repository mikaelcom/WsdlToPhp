<?php
/**
 * Class file for AmazonEc2TypeDescribeVolumesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeVolumesType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeVolumesType extends AmazonEc2WsdlClass
{
	/**
	 * The volumeSet
	 * @var AmazonEc2TypeDescribeVolumesSetType
	 */
	public $volumeSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeVolumesSetType volumeSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeVolumesType
	 */
	public function __construct($_volumeSet = null,$_filterSet = null)
	{
		parent::__construct(array('volumeSet'=>$_volumeSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set volumeSet
	 * @param DescribeVolumesSetType volumeSet
	 * @return DescribeVolumesSetType
	 */
	public function setVolumeSet($_volumeSet)
	{
		return ($this->volumeSet = $_volumeSet);
	}
	/**
	 * Get volumeSet
	 * @return AmazonEc2TypeDescribeVolumesSetType
	 */
	public function getVolumeSet()
	{
		return $this->volumeSet;
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