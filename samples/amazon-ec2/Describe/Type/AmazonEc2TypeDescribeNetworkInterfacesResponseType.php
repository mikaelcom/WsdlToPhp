<?php
/**
 * Class file for AmazonEc2TypeDescribeNetworkInterfacesResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeNetworkInterfacesResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeNetworkInterfacesResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The networkInterfaceSet
	 * @var AmazonEc2TypeNetworkInterfaceSetType
	 */
	public $networkInterfaceSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeNetworkInterfaceSetType networkInterfaceSet
	 * @return AmazonEc2TypeDescribeNetworkInterfacesResponseType
	 */
	public function __construct($_requestId = null,$_networkInterfaceSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'networkInterfaceSet'=>$_networkInterfaceSet));
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
	 * Set networkInterfaceSet
	 * @param NetworkInterfaceSetType networkInterfaceSet
	 * @return NetworkInterfaceSetType
	 */
	public function setNetworkInterfaceSet($_networkInterfaceSet)
	{
		return ($this->networkInterfaceSet = $_networkInterfaceSet);
	}
	/**
	 * Get networkInterfaceSet
	 * @return AmazonEc2TypeNetworkInterfaceSetType
	 */
	public function getNetworkInterfaceSet()
	{
		return $this->networkInterfaceSet;
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