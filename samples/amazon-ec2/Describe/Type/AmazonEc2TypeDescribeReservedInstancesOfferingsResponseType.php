<?php
/**
 * Class file for AmazonEc2TypeDescribeReservedInstancesOfferingsResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeReservedInstancesOfferingsResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeReservedInstancesOfferingsResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The reservedInstancesOfferingsSet
	 * @var AmazonEc2TypeDescribeReservedInstancesOfferingsResponseSetType
	 */
	public $reservedInstancesOfferingsSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeDescribeReservedInstancesOfferingsResponseSetType reservedInstancesOfferingsSet
	 * @return AmazonEc2TypeDescribeReservedInstancesOfferingsResponseType
	 */
	public function __construct($_requestId = null,$_reservedInstancesOfferingsSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'reservedInstancesOfferingsSet'=>$_reservedInstancesOfferingsSet));
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
	 * Set reservedInstancesOfferingsSet
	 * @param DescribeReservedInstancesOfferingsResponseSetType reservedInstancesOfferingsSet
	 * @return DescribeReservedInstancesOfferingsResponseSetType
	 */
	public function setReservedInstancesOfferingsSet($_reservedInstancesOfferingsSet)
	{
		return ($this->reservedInstancesOfferingsSet = $_reservedInstancesOfferingsSet);
	}
	/**
	 * Get reservedInstancesOfferingsSet
	 * @return AmazonEc2TypeDescribeReservedInstancesOfferingsResponseSetType
	 */
	public function getReservedInstancesOfferingsSet()
	{
		return $this->reservedInstancesOfferingsSet;
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