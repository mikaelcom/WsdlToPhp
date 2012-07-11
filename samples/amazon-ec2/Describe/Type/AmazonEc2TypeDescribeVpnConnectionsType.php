<?php
/**
 * Class file for AmazonEc2TypeDescribeVpnConnectionsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeVpnConnectionsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeVpnConnectionsType extends AmazonEc2WsdlClass
{
	/**
	 * The vpnConnectionSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeVpnConnectionIdSetType
	 */
	public $vpnConnectionSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeVpnConnectionIdSetType vpnConnectionSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeVpnConnectionsType
	 */
	public function __construct($_vpnConnectionSet = null,$_filterSet = null)
	{
		parent::__construct(array('vpnConnectionSet'=>$_vpnConnectionSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set vpnConnectionSet
	 * @param VpnConnectionIdSetType vpnConnectionSet
	 * @return VpnConnectionIdSetType
	 */
	public function setVpnConnectionSet($_vpnConnectionSet)
	{
		return ($this->vpnConnectionSet = $_vpnConnectionSet);
	}
	/**
	 * Get vpnConnectionSet
	 * @return AmazonEc2TypeVpnConnectionIdSetType
	 */
	public function getVpnConnectionSet()
	{
		return $this->vpnConnectionSet;
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