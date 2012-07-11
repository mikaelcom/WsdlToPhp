<?php
/**
 * Class file for AmazonEc2TypePurchaseReservedInstancesOfferingType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypePurchaseReservedInstancesOfferingType
 * @date 10/07/2012
 */
class AmazonEc2TypePurchaseReservedInstancesOfferingType extends AmazonEc2WsdlClass
{
	/**
	 * The reservedInstancesOfferingId
	 * @var string
	 */
	public $reservedInstancesOfferingId;
	/**
	 * The instanceCount
	 * @var int
	 */
	public $instanceCount;
	/**
	 * Constructor
	 * @param string reservedInstancesOfferingId
	 * @param int instanceCount
	 * @return AmazonEc2TypePurchaseReservedInstancesOfferingType
	 */
	public function __construct($_reservedInstancesOfferingId = null,$_instanceCount = null)
	{
		parent::__construct(array('reservedInstancesOfferingId'=>$_reservedInstancesOfferingId,'instanceCount'=>$_instanceCount));
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
	 * Set instanceCount
	 * @param int instanceCount
	 * @return int
	 */
	public function setInstanceCount($_instanceCount)
	{
		return ($this->instanceCount = $_instanceCount);
	}
	/**
	 * Get instanceCount
	 * @return int
	 */
	public function getInstanceCount()
	{
		return $this->instanceCount;
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