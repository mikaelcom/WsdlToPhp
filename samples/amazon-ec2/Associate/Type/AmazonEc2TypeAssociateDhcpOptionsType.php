<?php
/**
 * Class file for AmazonEc2TypeAssociateDhcpOptionsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAssociateDhcpOptionsType
 * @date 10/07/2012
 */
class AmazonEc2TypeAssociateDhcpOptionsType extends AmazonEc2WsdlClass
{
	/**
	 * The dhcpOptionsId
	 * @var string
	 */
	public $dhcpOptionsId;
	/**
	 * The vpcId
	 * @var string
	 */
	public $vpcId;
	/**
	 * Constructor
	 * @param string dhcpOptionsId
	 * @param string vpcId
	 * @return AmazonEc2TypeAssociateDhcpOptionsType
	 */
	public function __construct($_dhcpOptionsId = null,$_vpcId = null)
	{
		parent::__construct(array('dhcpOptionsId'=>$_dhcpOptionsId,'vpcId'=>$_vpcId));
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
	 * Set vpcId
	 * @param string vpcId
	 * @return string
	 */
	public function setVpcId($_vpcId)
	{
		return ($this->vpcId = $_vpcId);
	}
	/**
	 * Get vpcId
	 * @return string
	 */
	public function getVpcId()
	{
		return $this->vpcId;
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