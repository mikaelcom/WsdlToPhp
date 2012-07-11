<?php
/**
 * Class file for AmazonEc2TypeReplaceRouteType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeReplaceRouteType
 * @date 10/07/2012
 */
class AmazonEc2TypeReplaceRouteType extends AmazonEc2WsdlClass
{
	/**
	 * The routeTableId
	 * @var string
	 */
	public $routeTableId;
	/**
	 * The destinationCidrBlock
	 * @var string
	 */
	public $destinationCidrBlock;
	/**
	 * The gatewayId
	 * @var string
	 */
	public $gatewayId;
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The networkInterfaceId
	 * @var string
	 */
	public $networkInterfaceId;
	/**
	 * Constructor
	 * @param string routeTableId
	 * @param string destinationCidrBlock
	 * @param string gatewayId
	 * @param string instanceId
	 * @param string networkInterfaceId
	 * @return AmazonEc2TypeReplaceRouteType
	 */
	public function __construct($_routeTableId = null,$_destinationCidrBlock = null,$_gatewayId = null,$_instanceId = null,$_networkInterfaceId = null)
	{
		parent::__construct(array('routeTableId'=>$_routeTableId,'destinationCidrBlock'=>$_destinationCidrBlock,'gatewayId'=>$_gatewayId,'instanceId'=>$_instanceId,'networkInterfaceId'=>$_networkInterfaceId));
	}
	/**
	 * Set routeTableId
	 * @param string routeTableId
	 * @return string
	 */
	public function setRouteTableId($_routeTableId)
	{
		return ($this->routeTableId = $_routeTableId);
	}
	/**
	 * Get routeTableId
	 * @return string
	 */
	public function getRouteTableId()
	{
		return $this->routeTableId;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>