<?php
/**
 * Class file for AmazonEc2TypeDeleteDhcpOptionsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDeleteDhcpOptionsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDeleteDhcpOptionsType extends AmazonEc2WsdlClass
{
	/**
	 * The dhcpOptionsId
	 * @var string
	 */
	public $dhcpOptionsId;
	/**
	 * Constructor
	 * @param string dhcpOptionsId
	 * @return AmazonEc2TypeDeleteDhcpOptionsType
	 */
	public function __construct($_dhcpOptionsId = null)
	{
		parent::__construct(array('dhcpOptionsId'=>$_dhcpOptionsId));
	}
	/**
	 * Set dhcpOptionsId
	 * @param string dhcpOptionsId
	 * @return string
	 */
	public function setDhcpOptionsId($_dhcpOptionsId)
	{
		return ($this->dhcpOptionsId = $_dhcpOptionsId);
	}
	/**
	 * Get dhcpOptionsId
	 * @return string
	 */
	public function getDhcpOptionsId()
	{
		return $this->dhcpOptionsId;
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