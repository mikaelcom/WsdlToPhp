<?php
/**
 * Class file for AmazonEc2TypeCreateNetworkInterfaceResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateNetworkInterfaceResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateNetworkInterfaceResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The networkInterface
	 * @var AmazonEc2TypeNetworkInterfaceType
	 */
	public $networkInterface;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeNetworkInterfaceType networkInterface
	 * @return AmazonEc2TypeCreateNetworkInterfaceResponseType
	 */
	public function __construct($_requestId = null,$_networkInterface = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'networkInterface'=>$_networkInterface));
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
	 * Set networkInterface
	 * @param NetworkInterfaceType networkInterface
	 * @return NetworkInterfaceType
	 */
	public function setNetworkInterface($_networkInterface)
	{
		return ($this->networkInterface = $_networkInterface);
	}
	/**
	 * Get networkInterface
	 * @return AmazonEc2TypeNetworkInterfaceType
	 */
	public function getNetworkInterface()
	{
		return $this->networkInterface;
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