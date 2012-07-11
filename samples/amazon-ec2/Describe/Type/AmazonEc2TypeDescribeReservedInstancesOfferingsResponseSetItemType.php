<?php
/**
 * Class file for AmazonEc2TypeDescribeReservedInstancesOfferingsResponseSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeReservedInstancesOfferingsResponseSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeReservedInstancesOfferingsResponseSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The reservedInstancesOfferingId
	 * @var string
	 */
	public $reservedInstancesOfferingId;
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
	 * The productDescription
	 * @var string
	 */
	public $productDescription;
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
	 * @var AmazonEc2TypeRecurringChargesSetType
	 */
	public $recurringCharges;
	/**
	 * Constructor
	 * @param string reservedInstancesOfferingId
	 * @param string instanceType
	 * @param string availabilityZone
	 * @param long duration
	 * @param double fixedPrice
	 * @param double usagePrice
	 * @param string productDescription
	 * @param string instanceTenancy
	 * @param string currencyCode
	 * @param string offeringType
	 * @param AmazonEc2TypeRecurringChargesSetType recurringCharges
	 * @return AmazonEc2TypeDescribeReservedInstancesOfferingsResponseSetItemType
	 */
	public function __construct($_reservedInstancesOfferingId = null,$_instanceType = null,$_availabilityZone = null,$_duration = null,$_fixedPrice = null,$_usagePrice = null,$_productDescription = null,$_instanceTenancy = null,$_currencyCode = null,$_offeringType = null,$_recurringCharges = null)
	{
		parent::__construct(array('reservedInstancesOfferingId'=>$_reservedInstancesOfferingId,'instanceType'=>$_instanceType,'availabilityZone'=>$_availabilityZone,'duration'=>$_duration,'fixedPrice'=>$_fixedPrice,'usagePrice'=>$_usagePrice,'productDescription'=>$_productDescription,'instanceTenancy'=>$_instanceTenancy,'currencyCode'=>$_currencyCode,'offeringType'=>$_offeringType,'recurringCharges'=>$_recurringCharges));
	}
	/**
	 * Set reservedInstancesOfferingId
	 * @param string reservedInstancesOfferingId
	 * @return string
	 */
	public function setReservedInstancesOfferingId($_reservedInstancesOfferingId)
	{
		return ($this->reservedInstancesOfferingId = $_reservedInstancesOfferingId);
	}
	/**
	 * Get reservedInstancesOfferingId
	 * @return string
	 */
	public function getReservedInstancesOfferingId()
	{
		return $this->reservedInstancesOfferingId;
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