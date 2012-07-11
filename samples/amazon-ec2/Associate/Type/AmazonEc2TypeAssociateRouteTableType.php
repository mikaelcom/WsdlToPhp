<?php
/**
 * Class file for AmazonEc2TypeAssociateRouteTableType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAssociateRouteTableType
 * @date 10/07/2012
 */
class AmazonEc2TypeAssociateRouteTableType extends AmazonEc2WsdlClass
{
	/**
	 * The routeTableId
	 * @var string
	 */
	public $routeTableId;
	/**
	 * The subnetId
	 * @var string
	 */
	public $subnetId;
	/**
	 * Constructor
	 * @param string routeTableId
	 * @param string subnetId
	 * @return AmazonEc2TypeAssociateRouteTableType
	 */
	public function __construct($_routeTableId = null,$_subnetId = null)
	{
		parent::__construct(array('routeTableId'=>$_routeTableId,'subnetId'=>$_subnetId));
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
	 * Set subnetId
	 * @param string subnetId
	 * @return string
	 */
	public function setSubnetId($_subnetId)
	{
		return ($this->subnetId = $_subnetId);
	}
	/**
	 * Get subnetId
	 * @return string
	 */
	public function getSubnetId()
	{
		return $this->subnetId;
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