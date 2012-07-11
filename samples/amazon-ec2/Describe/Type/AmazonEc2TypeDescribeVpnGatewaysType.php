<?php
/**
 * Class file for AmazonEc2TypeDescribeVpnGatewaysType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeVpnGatewaysType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeVpnGatewaysType extends AmazonEc2WsdlClass
{
	/**
	 * The vpnGatewaySet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeVpnGatewayIdSetType
	 */
	public $vpnGatewaySet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeVpnGatewayIdSetType vpnGatewaySet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeVpnGatewaysType
	 */
	public function __construct($_vpnGatewaySet = null,$_filterSet = null)
	{
		parent::__construct(array('vpnGatewaySet'=>$_vpnGatewaySet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set vpnGatewaySet
	 * @param VpnGatewayIdSetType vpnGatewaySet
	 * @return VpnGatewayIdSetType
	 */
	public function setVpnGatewaySet($_vpnGatewaySet)
	{
		return ($this->vpnGatewaySet = $_vpnGatewaySet);
	}
	/**
	 * Get vpnGatewaySet
	 * @return AmazonEc2TypeVpnGatewayIdSetType
	 */
	public function getVpnGatewaySet()
	{
		return $this->vpnGatewaySet;
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