<?php
/**
 * Class file for AmazonEc2TypeVpnConnectionIdSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVpnConnectionIdSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeVpnConnectionIdSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The vpnConnectionId
	 * @var string
	 */
	public $vpnConnectionId;
	/**
	 * Constructor
	 * @param string vpnConnectionId
	 * @return AmazonEc2TypeVpnConnectionIdSetItemType
	 */
	public function __construct($_vpnConnectionId = null)
	{
		parent::__construct(array('vpnConnectionId'=>$_vpnConnectionId));
	}
	/**
	 * Set vpnConnectionId
	 * @param string vpnConnectionId
	 * @return string
	 */
	public function setVpnConnectionId($_vpnConnectionId)
	{
		return ($this->vpnConnectionId = $_vpnConnectionId);
	}
	/**
	 * Get vpnConnectionId
	 * @return string
	 */
	public function getVpnConnectionId()
	{
		return $this->vpnConnectionId;
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