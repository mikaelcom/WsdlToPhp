<?php
/**
 * Class file for AmazonEc2TypeDeleteRouteTableType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDeleteRouteTableType
 * @date 10/07/2012
 */
class AmazonEc2TypeDeleteRouteTableType extends AmazonEc2WsdlClass
{
	/**
	 * The routeTableId
	 * @var string
	 */
	public $routeTableId;
	/**
	 * Constructor
	 * @param string routeTableId
	 * @return AmazonEc2TypeDeleteRouteTableType
	 */
	public function __construct($_routeTableId = null)
	{
		parent::__construct(array('routeTableId'=>$_routeTableId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>