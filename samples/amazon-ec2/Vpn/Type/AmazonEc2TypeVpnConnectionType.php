<?php
/**
 * Class file for AmazonEc2TypeVpnConnectionType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVpnConnectionType
 * @date 10/07/2012
 */
class AmazonEc2TypeVpnConnectionType extends AmazonEc2WsdlClass
{
	/**
	 * The vpnConnectionId
	 * @var string
	 */
	public $vpnConnectionId;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The customerGatewayConfiguration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $customerGatewayConfiguration;
	/**
	 * The type
	 * Meta informations :
	 * 	- minOccurs : 0
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
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * The vgwTelemetry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeVgwTelemetryType
	 */
	public $vgwTelemetry;
	/**
	 * Constructor
	 * @param string vpnConnectionId
	 * @param string state
	 * @param string customerGatewayConfiguration
	 * @param string type
	 * @param string customerGatewayId
	 * @param string vpnGatewayId
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @param AmazonEc2TypeVgwTelemetryType vgwTelemetry
	 * @return AmazonEc2TypeVpnConnectionType
	 */
	public function __construct($_vpnConnectionId = null,$_state = null,$_customerGatewayConfiguration = null,$_type = null,$_customerGatewayId = null,$_vpnGatewayId = null,$_tagSet = null,$_vgwTelemetry = null)
	{
		parent::__construct(array('vpnConnectionId'=>$_vpnConnectionId,'state'=>$_state,'customerGatewayConfiguration'=>$_customerGatewayConfiguration,'type'=>$_type,'customerGatewayId'=>$_customerGatewayId,'vpnGatewayId'=>$_vpnGatewayId,'tagSet'=>$_tagSet,'vgwTelemetry'=>$_vgwTelemetry));
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
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set customerGatewayConfiguration
	 * @param string customerGatewayConfiguration
	 * @return string
	 */
	public function setCustomerGatewayConfiguration($_customerGatewayConfiguration)
	{
		return ($this->customerGatewayConfiguration = $_customerGatewayConfiguration);
	}
	/**
	 * Get customerGatewayConfiguration
	 * @return string
	 */
	public function getCustomerGatewayConfiguration()
	{
		return $this->customerGatewayConfiguration;
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
	 * Set tagSet
	 * @param ResourceTagSetType tagSet
	 * @return ResourceTagSetType
	 */
	public function setTagSet($_tagSet)
	{
		return ($this->tagSet = $_tagSet);
	}
	/**
	 * Get tagSet
	 * @return AmazonEc2TypeResourceTagSetType
	 */
	public function getTagSet()
	{
		return $this->tagSet;
	}
	/**
	 * Set vgwTelemetry
	 * @param VgwTelemetryType vgwTelemetry
	 * @return VgwTelemetryType
	 */
	public function setVgwTelemetry($_vgwTelemetry)
	{
		return ($this->vgwTelemetry = $_vgwTelemetry);
	}
	/**
	 * Get vgwTelemetry
	 * @return AmazonEc2TypeVgwTelemetryType
	 */
	public function getVgwTelemetry()
	{
		return $this->vgwTelemetry;
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