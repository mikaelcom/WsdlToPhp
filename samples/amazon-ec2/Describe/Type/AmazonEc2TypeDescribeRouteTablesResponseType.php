<?php
/**
 * Class file for AmazonEc2TypeDescribeRouteTablesResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeRouteTablesResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeRouteTablesResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The routeTableSet
	 * @var AmazonEc2TypeRouteTableSetType
	 */
	public $routeTableSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeRouteTableSetType routeTableSet
	 * @return AmazonEc2TypeDescribeRouteTablesResponseType
	 */
	public function __construct($_requestId = null,$_routeTableSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'routeTableSet'=>$_routeTableSet));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
	}
	/**
	 * Set routeTableSet
	 * @param RouteTableSetType routeTableSet
	 * @return RouteTableSetType
	 */
	public function setRouteTableSet($_routeTableSet)
	{
		return ($this->routeTableSet = $_routeTableSet);
	}
	/**
	 * Get routeTableSet
	 * @return AmazonEc2TypeRouteTableSetType
	 */
	public function getRouteTableSet()
	{
		return $this->routeTableSet;
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