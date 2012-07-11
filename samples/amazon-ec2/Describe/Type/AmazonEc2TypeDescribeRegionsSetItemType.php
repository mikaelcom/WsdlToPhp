<?php
/**
 * Class file for AmazonEc2TypeDescribeRegionsSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeRegionsSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeRegionsSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The regionName
	 * @var string
	 */
	public $regionName;
	/**
	 * Constructor
	 * @param string regionName
	 * @return AmazonEc2TypeDescribeRegionsSetItemType
	 */
	public function __construct($_regionName = null)
	{
		parent::__construct(array('regionName'=>$_regionName));
	}
	/**
	 * Set regionName
	 * @param string regionName
	 * @return string
	 */
	public function setRegionName($_regionName)
	{
		return ($this->regionName = $_regionName);
	}
	/**
	 * Get regionName
	 * @return string
	 */
	public function getRegionName()
	{
		return $this->regionName;
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