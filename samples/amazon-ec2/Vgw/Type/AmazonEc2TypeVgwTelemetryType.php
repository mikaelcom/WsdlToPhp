<?php
/**
 * Class file for AmazonEc2TypeVgwTelemetryType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVgwTelemetryType
 * @date 10/07/2012
 */
class AmazonEc2TypeVgwTelemetryType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeVpnTunnelTelemetryType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeVpnTunnelTelemetryType item
	 * @return AmazonEc2TypeVgwTelemetryType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param VpnTunnelTelemetryType item
	 * @return VpnTunnelTelemetryType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeVpnTunnelTelemetryType
	 */
	public function getItem()
	{
		return $this->item;
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