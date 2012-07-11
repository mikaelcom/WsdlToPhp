<?php
/**
 * Class file for AmazonEc2TypeRouteTableAssociationType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRouteTableAssociationType
 * @date 10/07/2012
 */
class AmazonEc2TypeRouteTableAssociationType extends AmazonEc2WsdlClass
{
	/**
	 * The routeTableAssociationId
	 * @var string
	 */
	public $routeTableAssociationId;
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
	 * The main
	 * @var boolean
	 */
	public $main;
	/**
	 * Constructor
	 * @param string routeTableAssociationId
	 * @param string routeTableId
	 * @param string subnetId
	 * @param boolean main
	 * @return AmazonEc2TypeRouteTableAssociationType
	 */
	public function __construct($_routeTableAssociationId = null,$_routeTableId = null,$_subnetId = null,$_main = null)
	{
		parent::__construct(array('routeTableAssociationId'=>$_routeTableAssociationId,'routeTableId'=>$_routeTableId,'subnetId'=>$_subnetId,'main'=>$_main));
	}
	/**
	 * Set routeTableAssociationId
	 * @param string routeTableAssociationId
	 * @return string
	 */
	public function setRouteTableAssociationId($_routeTableAssociationId)
	{
		return ($this->routeTableAssociationId = $_routeTableAssociationId);
	}
	/**
	 * Get routeTableAssociationId
	 * @return string
	 */
	public function getRouteTableAssociationId()
	{
		return $this->routeTableAssociationId;
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
	 * Set main
	 * @param boolean main
	 * @return boolean
	 */
	public function setMain($_main)
	{
		return ($this->main = $_main);
	}
	/**
	 * Get main
	 * @return boolean
	 */
	public function getMain()
	{
		return $this->main;
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