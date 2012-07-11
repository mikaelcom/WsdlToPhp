<?php
/**
 * Class file for OvhTypeRtmPortsIfaceStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmPortsIfaceStruct
 * @date 02/07/2012
 */
class OvhTypeRtmPortsIfaceStruct extends OvhWsdlClass
{
	/**
	 * The iface
	 * @var string
	 */
	public $iface;
	/**
	 * The ports
	 * @var OvhTypeMyArrayOfRtmPortsIfaceDetailStructType
	 */
	public $ports;
	/**
	 * Constructor
	 * @param string iface
	 * @param OvhTypeMyArrayOfRtmPortsIfaceDetailStructType ports
	 * @return OvhTypeRtmPortsIfaceStruct
	 */
	public function __construct($_iface = null,$_ports = null)
	{
		parent::__construct(array('iface'=>$_iface,'ports'=>new OvhTypeMyArrayOfRtmPortsIfaceDetailStructType($_ports)));
	}
	/**
	 * Set iface
	 * @param string iface
	 * @return string
	 */
	public function setIface($_iface)
	{
		return ($this->iface = $_iface);
	}
	/**
	 * Get iface
	 * @return string
	 */
	public function getIface()
	{
		return $this->iface;
	}
	/**
	 * Set ports
	 * @param MyArrayOfRtmPortsIfaceDetailStructType ports
	 * @return MyArrayOfRtmPortsIfaceDetailStructType
	 */
	public function setPorts($_ports)
	{
		return ($this->ports = $_ports);
	}
	/**
	 * Get ports
	 * @return OvhTypeMyArrayOfRtmPortsIfaceDetailStructType
	 */
	public function getPorts()
	{
		return $this->ports;
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