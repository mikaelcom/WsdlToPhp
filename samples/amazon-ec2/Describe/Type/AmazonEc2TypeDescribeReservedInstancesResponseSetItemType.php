<?php
/**
 * Class file for AmazonEc2TypeDescribeReservedInstancesResponseSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeReservedInstancesResponseSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeReservedInstancesResponseSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The reservedInstancesId
	 * @var string
	 */
	public $reservedInstancesId;
	/**
	 * The instanceType
	 * @var string
	 */
	public $instanceType;
	/**
	 * The availabilityZone
	 * @var string
	 */
	public $availabilityZone;
	/**
	 * The start
	 * @var dateTime
	 */
	public $start;
	/**
	 * The duration
	 * @var long
	 */
	public $duration;
	/**
	 * The fixedPrice
	 * @var double
	 */
	public $fixedPrice;
	/**
	 * The usagePrice
	 * @var double
	 */
	public $usagePrice;
	/**
	 * The instanceCount
	 * @var integer
	 */
	public $instanceCount;
	/**
	 * The productDescription
	 * @var string
	 */
	public $productDescription;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * The instanceTenancy
	 * @var string
	 */
	public $instanceTenancy;
	/**
	 * The currencyCode
	 * @var string
	 */
	public $currencyCode;
	/**
	 * The offeringType
	 * @var string
	 */
	public $offeringType;
	/**
	 * The recurringCharges
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeRecurringChargesSetType
	 */
	public $recurringCharges;
	/**
	 * Constructor
	 * @param string reservedInstancesId
	 * @param string instanceType
	 * @param string availabilityZone
	 * @param dateTime start
	 * @param long duration
	 * @param double fixedPrice
	 * @param double usagePrice
	 * @param integer instanceCount
	 * @param string productDescription
	 * @param string state
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @param string instanceTenancy
	 * @param string currencyCode
	 * @param string offeringType
	 * @param AmazonEc2TypeRecurringChargesSetType recurringCharges
	 * @return AmazonEc2TypeDescribeReservedInstancesResponseSetItemType
	 */
	public function __construct($_reservedInstancesId = null,$_instanceType = null,$_availabilityZone = null,$_start = null,$_duration = null,$_fixedPrice = null,$_usagePrice = null,$_instanceCount = null,$_productDescription = null,$_state = null,$_tagSet = null,$_instanceTenancy = null,$_currencyCode = null,$_offeringType = null,$_recurringCharges = null)
	{
		parent::__construct(array('reservedInstancesId'=>$_reservedInstancesId,'instanceType'=>$_instanceType,'availabilityZone'=>$_availabilityZone,'start'=>$_start,'duration'=>$_duration,'fixedPrice'=>$_fixedPrice,'usagePrice'=>$_usagePrice,'instanceCount'=>$_instanceCount,'productDescription'=>$_productDescription,'state'=>$_state,'tagSet'=>$_tagSet,'instanceTenancy'=>$_instanceTenancy,'currencyCode'=>$_currencyCode,'offeringType'=>$_offeringType,'recurringCharges'=>$_recurringCharges));
	}
	/**
	 * Set reservedInstancesId
	 * @param string reservedInstancesId
	 * @return string
	 */
	public function setReservedInstancesId($_reservedInstancesId)
	{
		return ($this->reservedInstancesId = $_reservedInstancesId);
	}
	/**
	 * Get reservedInstancesId
	 * @return string
	 */
	public function getReservedInstancesId()
	{
		return $this->reservedInstancesId;
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
	 * Set start
	 * @param dateTime start
	 * @return dateTime
	 */
	public function setStart($_start)
	{
		return ($this->start = $_start);
	}
	/**
	 * Get start
	 * @return dateTime
	 */
	public function getStart()
	{
		return $this->start;
	}
	/**
	 * Set duration
	 * @param long duration
	 * @return long
	 */
	public function setDuration($_duration)
	{
		return ($this->duration = $_duration);
	}
	/**
	 * Get duration
	 * @return long
	 */
	public function getDuration()
	{
		return $this->duration;
	}
	/**
	 * Set fixedPrice
	 * @param double fixedPrice
	 * @return double
	 */
	public function setFixedPrice($_fixedPrice)
	{
		return ($this->fixedPrice = $_fixedPrice);
	}
	/**
	 * Get fixedPrice
	 * @return double
	 */
	public function getFixedPrice()
	{
		return $this->fixedPrice;
	}
	/**
	 * Set usagePrice
	 * @param double usagePrice
	 * @return double
	 */
	public function setUsagePrice($_usagePrice)
	{
		return ($this->usagePrice = $_usagePrice);
	}
	/**
	 * Get usagePrice
	 * @return double
	 */
	public function getUsagePrice()
	{
		return $this->usagePrice;
	}
	/**
	 * Set instanceCount
	 * @param integer instanceCount
	 * @return integer
	 */
	public function setInstanceCount($_instanceCount)
	{
		return ($this->instanceCount = $_instanceCount);
	}
	/**
	 * Get instanceCount
	 * @return integer
	 */
	public function getInstanceCount()
	{
		return $this->instanceCount;
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
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set tagSet
	 * @param ResourceTagSetType tagSet
	 * @return ResourceTagSetType
	 */
	public function setTagSet($_tagSet)
	{
		return ($this->tagSet = $_tagSet);
	}
	/**
	 * Get tagSet
	 * @return AmazonEc2TypeResourceTagSetType
	 */
	public function getTagSet()
	{
		return $this->tagSet;
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
	 * Set currencyCode
	 * @param string currencyCode
	 * @return string
	 */
	public function setCurrencyCode($_currencyCode)
	{
		return ($this->currencyCode = $_currencyCode);
	}
	/**
	 * Get currencyCode
	 * @return string
	 */
	public function getCurrencyCode()
	{
		return $this->currencyCode;
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
	 * Set recurringCharges
	 * @param RecurringChargesSetType recurringCharges
	 * @return RecurringChargesSetType
	 */
	public function setRecurringCharges($_recurringCharges)
	{
		return ($this->recurringCharges = $_recurringCharges);
	}
	/**
	 * Get recurringCharges
	 * @return AmazonEc2TypeRecurringChargesSetType
	 */
	public function getRecurringCharges()
	{
		return $this->recurringCharges;
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