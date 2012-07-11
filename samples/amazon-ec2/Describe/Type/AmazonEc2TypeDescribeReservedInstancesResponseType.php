<?php
/**
 * Class file for AmazonEc2TypeDescribeReservedInstancesResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeReservedInstancesResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeReservedInstancesResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The reservedInstancesSet
	 * @var AmazonEc2TypeDescribeReservedInstancesResponseSetType
	 */
	public $reservedInstancesSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeDescribeReservedInstancesResponseSetType reservedInstancesSet
	 * @return AmazonEc2TypeDescribeReservedInstancesResponseType
	 */
	public function __construct($_requestId = null,$_reservedInstancesSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'reservedInstancesSet'=>$_reservedInstancesSet));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
	}
	/**
	 * Set reservedInstancesSet
	 * @param DescribeReservedInstancesResponseSetType reservedInstancesSet
	 * @return DescribeReservedInstancesResponseSetType
	 */
	public function setReservedInstancesSet($_reservedInstancesSet)
	{
		return ($this->reservedInstancesSet = $_reservedInstancesSet);
	}
	/**
	 * Get reservedInstancesSet
	 * @return AmazonEc2TypeDescribeReservedInstancesResponseSetType
	 */
	public function getReservedInstancesSet()
	{
		return $this->reservedInstancesSet;
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