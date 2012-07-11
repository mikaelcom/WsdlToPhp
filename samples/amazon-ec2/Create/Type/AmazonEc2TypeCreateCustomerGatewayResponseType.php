<?php
/**
 * Class file for AmazonEc2TypeCreateCustomerGatewayResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateCustomerGatewayResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateCustomerGatewayResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The customerGateway
	 * @var AmazonEc2TypeCustomerGatewayType
	 */
	public $customerGateway;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeCustomerGatewayType customerGateway
	 * @return AmazonEc2TypeCreateCustomerGatewayResponseType
	 */
	public function __construct($_requestId = null,$_customerGateway = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'customerGateway'=>$_customerGateway));
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
	 * Set customerGateway
	 * @param CustomerGatewayType customerGateway
	 * @return CustomerGatewayType
	 */
	public function setCustomerGateway($_customerGateway)
	{
		return ($this->customerGateway = $_customerGateway);
	}
	/**
	 * Get customerGateway
	 * @return AmazonEc2TypeCustomerGatewayType
	 */
	public function getCustomerGateway()
	{
		return $this->customerGateway;
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