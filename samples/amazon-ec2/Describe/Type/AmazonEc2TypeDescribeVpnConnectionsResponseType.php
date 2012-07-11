<?php
/**
 * Class file for AmazonEc2TypeDescribeVpnConnectionsResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeVpnConnectionsResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeVpnConnectionsResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The vpnConnectionSet
	 * @var AmazonEc2TypeVpnConnectionSetType
	 */
	public $vpnConnectionSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeVpnConnectionSetType vpnConnectionSet
	 * @return AmazonEc2TypeDescribeVpnConnectionsResponseType
	 */
	public function __construct($_requestId = null,$_vpnConnectionSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'vpnConnectionSet'=>$_vpnConnectionSet));
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
	 * Set vpnConnectionSet
	 * @param VpnConnectionSetType vpnConnectionSet
	 * @return VpnConnectionSetType
	 */
	public function setVpnConnectionSet($_vpnConnectionSet)
	{
		return ($this->vpnConnectionSet = $_vpnConnectionSet);
	}
	/**
	 * Get vpnConnectionSet
	 * @return AmazonEc2TypeVpnConnectionSetType
	 */
	public function getVpnConnectionSet()
	{
		return $this->vpnConnectionSet;
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