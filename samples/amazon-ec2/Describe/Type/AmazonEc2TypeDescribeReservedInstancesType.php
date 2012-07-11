<?php
/**
 * Class file for AmazonEc2TypeDescribeReservedInstancesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeReservedInstancesType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeReservedInstancesType extends AmazonEc2WsdlClass
{
	/**
	 * The reservedInstancesSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeDescribeReservedInstancesSetType
	 */
	public $reservedInstancesSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * The offeringType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $offeringType;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeReservedInstancesSetType reservedInstancesSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @param string offeringType
	 * @return AmazonEc2TypeDescribeReservedInstancesType
	 */
	public function __construct($_reservedInstancesSet = null,$_filterSet = null,$_offeringType = null)
	{
		parent::__construct(array('reservedInstancesSet'=>$_reservedInstancesSet,'filterSet'=>$_filterSet,'offeringType'=>$_offeringType));
	}
	/**
	 * Set reservedInstancesSet
	 * @param DescribeReservedInstancesSetType reservedInstancesSet
	 * @return DescribeReservedInstancesSetType
	 */
	public function setReservedInstancesSet($_reservedInstancesSet)
	{
		return ($this->reservedInstancesSet = $_reservedInstancesSet);
	}
	/**
	 * Get reservedInstancesSet
	 * @return AmazonEc2TypeDescribeReservedInstancesSetType
	 */
	public function getReservedInstancesSet()
	{
		return $this->reservedInstancesSet;
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
	 * Set offeringType
	 * @param string offeringType
	 * @return string
	 */
	public function setOfferingType($_offeringType)
	{
		return ($this->offeringType = $_offeringType);
	}
	/**
	 * Get offeringType
	 * @return string
	 */
	public function getOfferingType()
	{
		return $this->offeringType;
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