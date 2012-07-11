<?php
/**
 * Class file for AmazonEc2TypeDescribeAvailabilityZonesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeAvailabilityZonesType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeAvailabilityZonesType extends AmazonEc2WsdlClass
{
	/**
	 * The availabilityZoneSet
	 * @var AmazonEc2TypeDescribeAvailabilityZonesSetType
	 */
	public $availabilityZoneSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeAvailabilityZonesSetType availabilityZoneSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeAvailabilityZonesType
	 */
	public function __construct($_availabilityZoneSet = null,$_filterSet = null)
	{
		parent::__construct(array('availabilityZoneSet'=>$_availabilityZoneSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set availabilityZoneSet
	 * @param DescribeAvailabilityZonesSetType availabilityZoneSet
	 * @return DescribeAvailabilityZonesSetType
	 */
	public function setAvailabilityZoneSet($_availabilityZoneSet)
	{
		return ($this->availabilityZoneSet = $_availabilityZoneSet);
	}
	/**
	 * Get availabilityZoneSet
	 * @return AmazonEc2TypeDescribeAvailabilityZonesSetType
	 */
	public function getAvailabilityZoneSet()
	{
		return $this->availabilityZoneSet;
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