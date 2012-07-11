<?php
/**
 * Class file for AmazonEc2TypeDescribeAddressesResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeAddressesResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeAddressesResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The addressesSet
	 * @var AmazonEc2TypeDescribeAddressesResponseInfoType
	 */
	public $addressesSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeDescribeAddressesResponseInfoType addressesSet
	 * @return AmazonEc2TypeDescribeAddressesResponseType
	 */
	public function __construct($_requestId = null,$_addressesSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'addressesSet'=>$_addressesSet));
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
	 * Set addressesSet
	 * @param DescribeAddressesResponseInfoType addressesSet
	 * @return DescribeAddressesResponseInfoType
	 */
	public function setAddressesSet($_addressesSet)
	{
		return ($this->addressesSet = $_addressesSet);
	}
	/**
	 * Get addressesSet
	 * @return AmazonEc2TypeDescribeAddressesResponseInfoType
	 */
	public function getAddressesSet()
	{
		return $this->addressesSet;
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