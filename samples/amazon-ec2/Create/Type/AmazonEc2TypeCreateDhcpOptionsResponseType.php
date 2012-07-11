<?php
/**
 * Class file for AmazonEc2TypeCreateDhcpOptionsResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateDhcpOptionsResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateDhcpOptionsResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The dhcpOptions
	 * @var AmazonEc2TypeDhcpOptionsType
	 */
	public $dhcpOptions;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeDhcpOptionsType dhcpOptions
	 * @return AmazonEc2TypeCreateDhcpOptionsResponseType
	 */
	public function __construct($_requestId = null,$_dhcpOptions = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'dhcpOptions'=>$_dhcpOptions));
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
	 * Set dhcpOptions
	 * @param DhcpOptionsType dhcpOptions
	 * @return DhcpOptionsType
	 */
	public function setDhcpOptions($_dhcpOptions)
	{
		return ($this->dhcpOptions = $_dhcpOptions);
	}
	/**
	 * Get dhcpOptions
	 * @return AmazonEc2TypeDhcpOptionsType
	 */
	public function getDhcpOptions()
	{
		return $this->dhcpOptions;
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