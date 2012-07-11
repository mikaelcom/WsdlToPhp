<?php
/**
 * Class file for AmazonEc2TypeDescribeVpnGatewaysResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeVpnGatewaysResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeVpnGatewaysResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The vpnGatewaySet
	 * @var AmazonEc2TypeVpnGatewaySetType
	 */
	public $vpnGatewaySet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeVpnGatewaySetType vpnGatewaySet
	 * @return AmazonEc2TypeDescribeVpnGatewaysResponseType
	 */
	public function __construct($_requestId = null,$_vpnGatewaySet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'vpnGatewaySet'=>$_vpnGatewaySet));
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
	 * Set vpnGatewaySet
	 * @param VpnGatewaySetType vpnGatewaySet
	 * @return VpnGatewaySetType
	 */
	public function setVpnGatewaySet($_vpnGatewaySet)
	{
		return ($this->vpnGatewaySet = $_vpnGatewaySet);
	}
	/**
	 * Get vpnGatewaySet
	 * @return AmazonEc2TypeVpnGatewaySetType
	 */
	public function getVpnGatewaySet()
	{
		return $this->vpnGatewaySet;
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