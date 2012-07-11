<?php
/**
 * Class file for AmazonEc2TypeCreateDhcpOptionsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateDhcpOptionsType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateDhcpOptionsType extends AmazonEc2WsdlClass
{
	/**
	 * The dhcpConfigurationSet
	 * @var AmazonEc2TypeDhcpConfigurationItemSetType
	 */
	public $dhcpConfigurationSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDhcpConfigurationItemSetType dhcpConfigurationSet
	 * @return AmazonEc2TypeCreateDhcpOptionsType
	 */
	public function __construct($_dhcpConfigurationSet = null)
	{
		parent::__construct(array('dhcpConfigurationSet'=>$_dhcpConfigurationSet));
	}
	/**
	 * Set dhcpConfigurationSet
	 * @param DhcpConfigurationItemSetType dhcpConfigurationSet
	 * @return DhcpConfigurationItemSetType
	 */
	public function setDhcpConfigurationSet($_dhcpConfigurationSet)
	{
		return ($this->dhcpConfigurationSet = $_dhcpConfigurationSet);
	}
	/**
	 * Get dhcpConfigurationSet
	 * @return AmazonEc2TypeDhcpConfigurationItemSetType
	 */
	public function getDhcpConfigurationSet()
	{
		return $this->dhcpConfigurationSet;
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