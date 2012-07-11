<?php
/**
 * Class file for AmazonEc2TypeRouteType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRouteType
 * @date 10/07/2012
 */
class AmazonEc2TypeRouteType extends AmazonEc2WsdlClass
{
	/**
	 * The destinationCidrBlock
	 * @var string
	 */
	public $destinationCidrBlock;
	/**
	 * The gatewayId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $gatewayId;
	/**
	 * The instanceId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $instanceId;
	/**
	 * The instanceOwnerId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $instanceOwnerId;
	/**
	 * The networkInterfaceId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $networkInterfaceId;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * Constructor
	 * @param string destinationCidrBlock
	 * @param string gatewayId
	 * @param string instanceId
	 * @param string instanceOwnerId
	 * @param string networkInterfaceId
	 * @param string state
	 * @return AmazonEc2TypeRouteType
	 */
	public function __construct($_destinationCidrBlock = null,$_gatewayId = null,$_instanceId = null,$_instanceOwnerId = null,$_networkInterfaceId = null,$_state = null)
	{
		parent::__construct(array('destinationCidrBlock'=>$_destinationCidrBlock,'gatewayId'=>$_gatewayId,'instanceId'=>$_instanceId,'instanceOwnerId'=>$_instanceOwnerId,'networkInterfaceId'=>$_networkInterfaceId,'state'=>$_state));
	}
	/**
	 * Set destinationCidrBlock
	 * @param string destinationCidrBlock
	 * @return string
	 */
	public function setDestinationCidrBlock($_destinationCidrBlock)
	{
		return ($this->destinationCidrBlock = $_destinationCidrBlock);
	}
	/**
	 * Get destinationCidrBlock
	 * @return string
	 */
	public function getDestinationCidrBlock()
	{
		return $this->destinationCidrBlock;
	}
	/**
	 * Set gatewayId
	 * @param string gatewayId
	 * @return string
	 */
	public function setGatewayId($_gatewayId)
	{
		return ($this->gatewayId = $_gatewayId);
	}
	/**
	 * Get gatewayId
	 * @return string
	 */
	public function getGatewayId()
	{
		return $this->gatewayId;
	}
	/**
	 * Set instanceId
	 * @param string instanceId
	 * @return string
	 */
	public function setInstanceId($_instanceId)
	{
		return ($this->instanceId = $_instanceId);
	}
	/**
	 * Get instanceId
	 * @return string
	 */
	public function getInstanceId()
	{
		return $this->instanceId;
	}
	/**
	 * Set instanceOwnerId
	 * @param string instanceOwnerId
	 * @return string
	 */
	public function setInstanceOwnerId($_instanceOwnerId)
	{
		return ($this->instanceOwnerId = $_instanceOwnerId);
	}
	/**
	 * Get instanceOwnerId
	 * @return string
	 */
	public function getInstanceOwnerId()
	{
		return $this->instanceOwnerId;
	}
	/**
	 * Set networkInterfaceId
	 * @param string networkInterfaceId
	 * @return string
	 */
	public function setNetworkInterfaceId($_networkInterfaceId)
	{
		return ($this->networkInterfaceId = $_networkInterfaceId);
	}
	/**
	 * Get networkInterfaceId
	 * @return string
	 */
	public function getNetworkInterfaceId()
	{
		return $this->networkInterfaceId;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>