<?php
/**
 * Class file for AmazonEc2TypeDeleteRouteType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDeleteRouteType
 * @date 10/07/2012
 */
class AmazonEc2TypeDeleteRouteType extends AmazonEc2WsdlClass
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
	 * Constructor
	 * @param string routeTableId
	 * @param string destinationCidrBlock
	 * @return AmazonEc2TypeDeleteRouteType
	 */
	public function __construct($_routeTableId = null,$_destinationCidrBlock = null)
	{
		parent::__construct(array('routeTableId'=>$_routeTableId,'destinationCidrBlock'=>$_destinationCidrBlock));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>