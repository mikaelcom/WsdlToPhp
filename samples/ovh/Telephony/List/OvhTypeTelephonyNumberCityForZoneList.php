<?php
/**
 * Class file for OvhTypeTelephonyNumberCityForZoneList
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyNumberCityForZoneList
 * @date 02/07/2012
 */
class OvhTypeTelephonyNumberCityForZoneList extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The zone
	 * @var string
	 */
	public $zone;
	/**
	 * Constructor
	 * @param string session
	 * @param string zone
	 * @return OvhTypeTelephonyNumberCityForZoneList
	 */
	public function __construct($_session = null,$_zone = null)
	{
		parent::__construct(array('session'=>$_session,'zone'=>$_zone));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>