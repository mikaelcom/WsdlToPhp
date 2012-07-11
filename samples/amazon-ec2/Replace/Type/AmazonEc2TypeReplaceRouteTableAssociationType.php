<?php
/**
 * Class file for AmazonEc2TypeReplaceRouteTableAssociationType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeReplaceRouteTableAssociationType
 * @date 10/07/2012
 */
class AmazonEc2TypeReplaceRouteTableAssociationType extends AmazonEc2WsdlClass
{
	/**
	 * The associationId
	 * @var string
	 */
	public $associationId;
	/**
	 * The routeTableId
	 * @var string
	 */
	public $routeTableId;
	/**
	 * Constructor
	 * @param string associationId
	 * @param string routeTableId
	 * @return AmazonEc2TypeReplaceRouteTableAssociationType
	 */
	public function __construct($_associationId = null,$_routeTableId = null)
	{
		parent::__construct(array('associationId'=>$_associationId,'routeTableId'=>$_routeTableId));
	}
	/**
	 * Set associationId
	 * @param string associationId
	 * @return string
	 */
	public function setAssociationId($_associationId)
	{
		return ($this->associationId = $_associationId);
	}
	/**
	 * Get associationId
	 * @return string
	 */
	public function getAssociationId()
	{
		return $this->associationId;
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