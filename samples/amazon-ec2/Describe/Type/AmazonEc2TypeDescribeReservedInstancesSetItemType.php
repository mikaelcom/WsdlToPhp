<?php
/**
 * Class file for AmazonEc2TypeDescribeReservedInstancesSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeReservedInstancesSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeReservedInstancesSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The reservedInstancesId
	 * @var string
	 */
	public $reservedInstancesId;
	/**
	 * Constructor
	 * @param string reservedInstancesId
	 * @return AmazonEc2TypeDescribeReservedInstancesSetItemType
	 */
	public function __construct($_reservedInstancesId = null)
	{
		parent::__construct(array('reservedInstancesId'=>$_reservedInstancesId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>