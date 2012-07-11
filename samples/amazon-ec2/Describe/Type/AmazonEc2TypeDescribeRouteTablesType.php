<?php
/**
 * Class file for AmazonEc2TypeDescribeRouteTablesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeRouteTablesType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeRouteTablesType extends AmazonEc2WsdlClass
{
	/**
	 * The routeTableIdSet
	 * @var AmazonEc2TypeRouteTableIdSetType
	 */
	public $routeTableIdSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeRouteTableIdSetType routeTableIdSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeRouteTablesType
	 */
	public function __construct($_routeTableIdSet = null,$_filterSet = null)
	{
		parent::__construct(array('routeTableIdSet'=>$_routeTableIdSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set routeTableIdSet
	 * @param RouteTableIdSetType routeTableIdSet
	 * @return RouteTableIdSetType
	 */
	public function setRouteTableIdSet($_routeTableIdSet)
	{
		return ($this->routeTableIdSet = $_routeTableIdSet);
	}
	/**
	 * Get routeTableIdSet
	 * @return AmazonEc2TypeRouteTableIdSetType
	 */
	public function getRouteTableIdSet()
	{
		return $this->routeTableIdSet;
	}
	/**
	 * Set filterSet
	 * @param FilterSetType filterSet
	 * @return FilterSetType
	 */
	public function setFilterSet($_filterSet)
	{
		return ($this->filterSet = $_filterSet);
	}
	/**
	 * Get filterSet
	 * @return AmazonEc2TypeFilterSetType
	 */
	public function getFilterSet()
	{
		return $this->filterSet;
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