<?php
/**
 * Class file for AmazonEc2TypeCreateVpnConnectionType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateVpnConnectionType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateVpnConnectionType extends AmazonEc2WsdlClass
{
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The customerGatewayId
	 * @var string
	 */
	public $customerGatewayId;
	/**
	 * The vpnGatewayId
	 * @var string
	 */
	public $vpnGatewayId;
	/**
	 * Constructor
	 * @param string type
	 * @param string customerGatewayId
	 * @param string vpnGatewayId
	 * @return AmazonEc2TypeCreateVpnConnectionType
	 */
	public function __construct($_type = null,$_customerGatewayId = null,$_vpnGatewayId = null)
	{
		parent::__construct(array('type'=>$_type,'customerGatewayId'=>$_customerGatewayId,'vpnGatewayId'=>$_vpnGatewayId));
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set customerGatewayId
	 * @param string customerGatewayId
	 * @return string
	 */
	public function setCustomerGatewayId($_customerGatewayId)
	{
		return ($this->customerGatewayId = $_customerGatewayId);
	}
	/**
	 * Get customerGatewayId
	 * @return string
	 */
	public function getCustomerGatewayId()
	{
		return $this->customerGatewayId;
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