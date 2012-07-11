<?php
/**
 * Class file for AmazonEc2TypePurchaseReservedInstancesOfferingResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypePurchaseReservedInstancesOfferingResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypePurchaseReservedInstancesOfferingResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The reservedInstancesId
	 * @var string
	 */
	public $reservedInstancesId;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string reservedInstancesId
	 * @return AmazonEc2TypePurchaseReservedInstancesOfferingResponseType
	 */
	public function __construct($_requestId = null,$_reservedInstancesId = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'reservedInstancesId'=>$_reservedInstancesId));
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