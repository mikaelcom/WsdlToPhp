<?php
/**
 * Class file for AmazonEc2TypeDescribeReservedInstancesOfferingsSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeReservedInstancesOfferingsSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeReservedInstancesOfferingsSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The reservedInstancesOfferingId
	 * @var string
	 */
	public $reservedInstancesOfferingId;
	/**
	 * Constructor
	 * @param string reservedInstancesOfferingId
	 * @return AmazonEc2TypeDescribeReservedInstancesOfferingsSetItemType
	 */
	public function __construct($_reservedInstancesOfferingId = null)
	{
		parent::__construct(array('reservedInstancesOfferingId'=>$_reservedInstancesOfferingId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>