<?php
/**
 * Class file for AmazonEc2TypeDescribeCustomerGatewaysResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeCustomerGatewaysResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeCustomerGatewaysResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The customerGatewaySet
	 * @var AmazonEc2TypeCustomerGatewaySetType
	 */
	public $customerGatewaySet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeCustomerGatewaySetType customerGatewaySet
	 * @return AmazonEc2TypeDescribeCustomerGatewaysResponseType
	 */
	public function __construct($_requestId = null,$_customerGatewaySet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'customerGatewaySet'=>$_customerGatewaySet));
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
	 * Set customerGatewaySet
	 * @param CustomerGatewaySetType customerGatewaySet
	 * @return CustomerGatewaySetType
	 */
	public function setCustomerGatewaySet($_customerGatewaySet)
	{
		return ($this->customerGatewaySet = $_customerGatewaySet);
	}
	/**
	 * Get customerGatewaySet
	 * @return AmazonEc2TypeCustomerGatewaySetType
	 */
	public function getCustomerGatewaySet()
	{
		return $this->customerGatewaySet;
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