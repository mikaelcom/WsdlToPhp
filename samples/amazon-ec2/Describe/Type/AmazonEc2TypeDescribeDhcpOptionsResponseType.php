<?php
/**
 * Class file for AmazonEc2TypeDescribeDhcpOptionsResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeDhcpOptionsResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeDhcpOptionsResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The dhcpOptionsSet
	 * @var AmazonEc2TypeDhcpOptionsSetType
	 */
	public $dhcpOptionsSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeDhcpOptionsSetType dhcpOptionsSet
	 * @return AmazonEc2TypeDescribeDhcpOptionsResponseType
	 */
	public function __construct($_requestId = null,$_dhcpOptionsSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'dhcpOptionsSet'=>$_dhcpOptionsSet));
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
	 * Set dhcpOptionsSet
	 * @param DhcpOptionsSetType dhcpOptionsSet
	 * @return DhcpOptionsSetType
	 */
	public function setDhcpOptionsSet($_dhcpOptionsSet)
	{
		return ($this->dhcpOptionsSet = $_dhcpOptionsSet);
	}
	/**
	 * Get dhcpOptionsSet
	 * @return AmazonEc2TypeDhcpOptionsSetType
	 */
	public function getDhcpOptionsSet()
	{
		return $this->dhcpOptionsSet;
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