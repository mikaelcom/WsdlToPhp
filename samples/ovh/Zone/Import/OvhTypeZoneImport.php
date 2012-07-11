<?php
/**
 * Class file for OvhTypeZoneImport
 * @date 02/07/2012
 */
/**
 * Class OvhTypeZoneImport
 * @date 02/07/2012
 */
class OvhTypeZoneImport extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The zone
	 * @var string
	 */
	public $zone;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string zone
	 * @return OvhTypeZoneImport
	 */
	public function __construct($_session = null,$_domain = null,$_zone = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'zone'=>$_zone));
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
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
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