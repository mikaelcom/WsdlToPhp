<?php
/**
 * Class file for AmazonEc2TypeDeleteVpnGatewayType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDeleteVpnGatewayType
 * @date 10/07/2012
 */
class AmazonEc2TypeDeleteVpnGatewayType extends AmazonEc2WsdlClass
{
	/**
	 * The vpnGatewayId
	 * @var string
	 */
	public $vpnGatewayId;
	/**
	 * Constructor
	 * @param string vpnGatewayId
	 * @return AmazonEc2TypeDeleteVpnGatewayType
	 */
	public function __construct($_vpnGatewayId = null)
	{
		parent::__construct(array('vpnGatewayId'=>$_vpnGatewayId));
	}
	/**
	 * Set vpnGatewayId
	 * @param string vpnGatewayId
	 * @return string
	 */
	public function setVpnGatewayId($_vpnGatewayId)
	{
		return ($this->vpnGatewayId = $_vpnGatewayId);
	}
	/**
	 * Get vpnGatewayId
	 * @return string
	 */
	public function getVpnGatewayId()
	{
		return $this->vpnGatewayId;
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