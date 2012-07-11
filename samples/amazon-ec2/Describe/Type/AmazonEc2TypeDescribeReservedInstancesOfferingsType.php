<?php
/**
 * Class file for AmazonEc2TypeDescribeReservedInstancesOfferingsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeReservedInstancesOfferingsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeReservedInstancesOfferingsType extends AmazonEc2WsdlClass
{
	/**
	 * The reservedInstancesOfferingsSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeDescribeReservedInstancesOfferingsSetType
	 */
	public $reservedInstancesOfferingsSet;
	/**
	 * The instanceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $instanceType;
	/**
	 * The availabilityZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $availabilityZone;
	/**
	 * The productDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $productDescription;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * The instanceTenancy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $instanceTenancy;
	/**
	 * The offeringType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $offeringType;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeReservedInstancesOfferingsSetType reservedInstancesOfferingsSet
	 * @param string instanceType
	 * @param string availabilityZone
	 * @param string productDescription
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @param string instanceTenancy
	 * @param string offeringType
	 * @return AmazonEc2TypeDescribeReservedInstancesOfferingsType
	 */
	public function __construct($_reservedInstancesOfferingsSet = null,$_instanceType = null,$_availabilityZone = null,$_productDescription = null,$_filterSet = null,$_instanceTenancy = null,$_offeringType = null)
	{
		parent::__construct(array('reservedInstancesOfferingsSet'=>$_reservedInstancesOfferingsSet,'instanceType'=>$_instanceType,'availabilityZone'=>$_availabilityZone,'productDescription'=>$_productDescription,'filterSet'=>$_filterSet,'instanceTenancy'=>$_instanceTenancy,'offeringType'=>$_offeringType));
	}
	/**
	 * Set reservedInstancesOfferingsSet
	 * @param DescribeReservedInstancesOfferingsSetType reservedInstancesOfferingsSet
	 * @return DescribeReservedInstancesOfferingsSetType
	 */
	public function setReservedInstancesOfferingsSet($_reservedInstancesOfferingsSet)
	{
		return ($this->reservedInstancesOfferingsSet = $_reservedInstancesOfferingsSet);
	}
	/**
	 * Get reservedInstancesOfferingsSet
	 * @return AmazonEc2TypeDescribeReservedInstancesOfferingsSetType
	 */
	public function getReservedInstancesOfferingsSet()
	{
		return $this->reservedInstancesOfferingsSet;
	}
	/**
	 * Set instanceType
	 * @param string instanceType
	 * @return string
	 */
	public function setInstanceType($_instanceType)
	{
		return ($this->instanceType = $_instanceType);
	}
	/**
	 * Get instanceType
	 * @return string
	 */
	public function getInstanceType()
	{
		return $this->instanceType;
	}
	/**
	 * Set availabilityZone
	 * @param string availabilityZone
	 * @return string
	 */
	public function setAvailabilityZone($_availabilityZone)
	{
		return ($this->availabilityZone = $_availabilityZone);
	}
	/**
	 * Get availabilityZone
	 * @return string
	 */
	public function getAvailabilityZone()
	{
		return $this->availabilityZone;
	}
	/**
	 * Set productDescription
	 * @param string productDescription
	 * @return string
	 */
	public function setProductDescription($_productDescription)
	{
		return ($this->productDescription = $_productDescription);
	}
	/**
	 * Get productDescription
	 * @return string
	 */
	public function getProductDescription()
	{
		return $this->productDescription;
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
	 * Set instanceTenancy
	 * @param string instanceTenancy
	 * @return string
	 */
	public function setInstanceTenancy($_instanceTenancy)
	{
		return ($this->instanceTenancy = $_instanceTenancy);
	}
	/**
	 * Get instanceTenancy
	 * @return string
	 */
	public function getInstanceTenancy()
	{
		return $this->instanceTenancy;
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