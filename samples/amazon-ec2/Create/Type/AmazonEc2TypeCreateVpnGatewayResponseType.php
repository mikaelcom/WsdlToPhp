<?php
/**
 * Class file for AmazonEc2TypeCreateVpnGatewayResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateVpnGatewayResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateVpnGatewayResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The vpnGateway
	 * @var AmazonEc2TypeVpnGatewayType
	 */
	public $vpnGateway;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeVpnGatewayType vpnGateway
	 * @return AmazonEc2TypeCreateVpnGatewayResponseType
	 */
	public function __construct($_requestId = null,$_vpnGateway = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'vpnGateway'=>$_vpnGateway));
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
	 * Set vpnGateway
	 * @param VpnGatewayType vpnGateway
	 * @return VpnGatewayType
	 */
	public function setVpnGateway($_vpnGateway)
	{
		return ($this->vpnGateway = $_vpnGateway);
	}
	/**
	 * Get vpnGateway
	 * @return AmazonEc2TypeVpnGatewayType
	 */
	public function getVpnGateway()
	{
		return $this->vpnGateway;
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