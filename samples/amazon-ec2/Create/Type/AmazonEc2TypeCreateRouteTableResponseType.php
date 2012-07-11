<?php
/**
 * Class file for AmazonEc2TypeCreateRouteTableResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateRouteTableResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateRouteTableResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The routeTable
	 * @var AmazonEc2TypeRouteTableType
	 */
	public $routeTable;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeRouteTableType routeTable
	 * @return AmazonEc2TypeCreateRouteTableResponseType
	 */
	public function __construct($_requestId = null,$_routeTable = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'routeTable'=>$_routeTable));
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
	 * Set routeTable
	 * @param RouteTableType routeTable
	 * @return RouteTableType
	 */
	public function setRouteTable($_routeTable)
	{
		return ($this->routeTable = $_routeTable);
	}
	/**
	 * Get routeTable
	 * @return AmazonEc2TypeRouteTableType
	 */
	public function getRouteTable()
	{
		return $this->routeTable;
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