<?php
/**
 * Class file for AmazonEc2TypeAttachVpnGatewayType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAttachVpnGatewayType
 * @date 10/07/2012
 */
class AmazonEc2TypeAttachVpnGatewayType extends AmazonEc2WsdlClass
{
	/**
	 * The vpnGatewayId
	 * @var string
	 */
	public $vpnGatewayId;
	/**
	 * The vpcId
	 * @var string
	 */
	public $vpcId;
	/**
	 * Constructor
	 * @param string vpnGatewayId
	 * @param string vpcId
	 * @return AmazonEc2TypeAttachVpnGatewayType
	 */
	public function __construct($_vpnGatewayId = null,$_vpcId = null)
	{
		parent::__construct(array('vpnGatewayId'=>$_vpnGatewayId,'vpcId'=>$_vpcId));
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