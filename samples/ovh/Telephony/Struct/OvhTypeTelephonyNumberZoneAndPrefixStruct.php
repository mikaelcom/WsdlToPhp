<?php
/**
 * Class file for OvhTypeTelephonyNumberZoneAndPrefixStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyNumberZoneAndPrefixStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyNumberZoneAndPrefixStruct extends OvhWsdlClass
{
	/**
	 * The zone
	 * @var string
	 */
	public $zone;
	/**
	 * The prefix
	 * @var string
	 */
	public $prefix;
	/**
	 * Constructor
	 * @param string zone
	 * @param string prefix
	 * @return OvhTypeTelephonyNumberZoneAndPrefixStruct
	 */
	public function __construct($_zone = null,$_prefix = null)
	{
		parent::__construct(array('zone'=>$_zone,'prefix'=>$_prefix));
	}
	/**
	 * Set zone
	 * @param string zone
	 * @return string
	 */
	public function setZone($_zone)
	{
		return ($this->zone = $_zone);
	}
	/**
	 * Get zone
	 * @return string
	 */
	public function getZone()
	{
		return $this->zone;
	}
	/**
	 * Set prefix
	 * @param string prefix
	 * @return string
	 */
	public function setPrefix($_prefix)
	{
		return ($this->prefix = $_prefix);
	}
	/**
	 * Get prefix
	 * @return string
	 */
	public function getPrefix()
	{
		return $this->prefix;
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