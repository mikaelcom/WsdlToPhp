<?php
/**
 * Class file for AmazonEc2TypeDescribeInternetGatewaysResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeInternetGatewaysResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeInternetGatewaysResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The internetGatewaySet
	 * @var AmazonEc2TypeInternetGatewaySetType
	 */
	public $internetGatewaySet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeInternetGatewaySetType internetGatewaySet
	 * @return AmazonEc2TypeDescribeInternetGatewaysResponseType
	 */
	public function __construct($_requestId = null,$_internetGatewaySet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'internetGatewaySet'=>$_internetGatewaySet));
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
	 * Set internetGatewaySet
	 * @param InternetGatewaySetType internetGatewaySet
	 * @return InternetGatewaySetType
	 */
	public function setInternetGatewaySet($_internetGatewaySet)
	{
		return ($this->internetGatewaySet = $_internetGatewaySet);
	}
	/**
	 * Get internetGatewaySet
	 * @return AmazonEc2TypeInternetGatewaySetType
	 */
	public function getInternetGatewaySet()
	{
		return $this->internetGatewaySet;
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