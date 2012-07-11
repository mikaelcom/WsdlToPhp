<?php
/**
 * Class file for AmazonEc2TypeCreateInternetGatewayResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateInternetGatewayResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateInternetGatewayResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The internetGateway
	 * @var AmazonEc2TypeInternetGatewayType
	 */
	public $internetGateway;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeInternetGatewayType internetGateway
	 * @return AmazonEc2TypeCreateInternetGatewayResponseType
	 */
	public function __construct($_requestId = null,$_internetGateway = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'internetGateway'=>$_internetGateway));
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
	 * Set internetGateway
	 * @param InternetGatewayType internetGateway
	 * @return InternetGatewayType
	 */
	public function setInternetGateway($_internetGateway)
	{
		return ($this->internetGateway = $_internetGateway);
	}
	/**
	 * Get internetGateway
	 * @return AmazonEc2TypeInternetGatewayType
	 */
	public function getInternetGateway()
	{
		return $this->internetGateway;
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