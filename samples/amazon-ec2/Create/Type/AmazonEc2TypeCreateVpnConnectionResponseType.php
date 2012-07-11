<?php
/**
 * Class file for AmazonEc2TypeCreateVpnConnectionResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateVpnConnectionResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateVpnConnectionResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The vpnConnection
	 * @var AmazonEc2TypeVpnConnectionType
	 */
	public $vpnConnection;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeVpnConnectionType vpnConnection
	 * @return AmazonEc2TypeCreateVpnConnectionResponseType
	 */
	public function __construct($_requestId = null,$_vpnConnection = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'vpnConnection'=>$_vpnConnection));
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
	 * Set vpnConnection
	 * @param VpnConnectionType vpnConnection
	 * @return VpnConnectionType
	 */
	public function setVpnConnection($_vpnConnection)
	{
		return ($this->vpnConnection = $_vpnConnection);
	}
	/**
	 * Get vpnConnection
	 * @return AmazonEc2TypeVpnConnectionType
	 */
	public function getVpnConnection()
	{
		return $this->vpnConnection;
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