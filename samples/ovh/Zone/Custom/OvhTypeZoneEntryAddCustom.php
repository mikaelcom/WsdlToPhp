<?php
/**
 * Class file for OvhTypeZoneEntryAddCustom
 * @date 02/07/2012
 */
/**
 * Class OvhTypeZoneEntryAddCustom
 * @date 02/07/2012
 */
class OvhTypeZoneEntryAddCustom extends OvhWsdlClass
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
	 * The fieldtype
	 * @var string
	 */
	public $fieldtype;
	/**
	 * The hostingtype
	 * @var string
	 */
	public $hostingtype;
	/**
	 * The hosting
	 * @var string
	 */
	public $hosting;
	/**
	 * The subdomain
	 * @var string
	 */
	public $subdomain;
	/**
	 * The priority
	 * @var string
	 */
	public $priority;
	/**
	 * The target
	 * @var string
	 */
	public $target;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string fieldtype
	 * @param string hostingtype
	 * @param string hosting
	 * @param string subdomain
	 * @param string priority
	 * @param string target
	 * @param string country
	 * @return OvhTypeZoneEntryAddCustom
	 */
	public function __construct($_session = null,$_domain = null,$_fieldtype = null,$_hostingtype = null,$_hosting = null,$_subdomain = null,$_priority = null,$_target = null,$_country = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'fieldtype'=>$_fieldtype,'hostingtype'=>$_hostingtype,'hosting'=>$_hosting,'subdomain'=>$_subdomain,'priority'=>$_priority,'target'=>$_target,'country'=>$_country));
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
	 * Set fieldtype
	 * @param string fieldtype
	 * @return string
	 */
	public function setFieldtype($_fieldtype)
	{
		return ($this->fieldtype = $_fieldtype);
	}
	/**
	 * Get fieldtype
	 * @return string
	 */
	public function getFieldtype()
	{
		return $this->fieldtype;
	}
	/**
	 * Set hostingtype
	 * @param string hostingtype
	 * @return string
	 */
	public function setHostingtype($_hostingtype)
	{
		return ($this->hostingtype = $_hostingtype);
	}
	/**
	 * Get hostingtype
	 * @return string
	 */
	public function getHostingtype()
	{
		return $this->hostingtype;
	}
	/**
	 * Set hosting
	 * @param string hosting
	 * @return string
	 */
	public function setHosting($_hosting)
	{
		return ($this->hosting = $_hosting);
	}
	/**
	 * Get hosting
	 * @return string
	 */
	public function getHosting()
	{
		return $this->hosting;
	}
	/**
	 * Set subdomain
	 * @param string subdomain
	 * @return string
	 */
	public function setSubdomain($_subdomain)
	{
		return ($this->subdomain = $_subdomain);
	}
	/**
	 * Get subdomain
	 * @return string
	 */
	public function getSubdomain()
	{
		return $this->subdomain;
	}
	/**
	 * Set priority
	 * @param string priority
	 * @return string
	 */
	public function setPriority($_priority)
	{
		return ($this->priority = $_priority);
	}
	/**
	 * Get priority
	 * @return string
	 */
	public function getPriority()
	{
		return $this->priority;
	}
	/**
	 * Set target
	 * @param string target
	 * @return string
	 */
	public function setTarget($_target)
	{
		return ($this->target = $_target);
	}
	/**
	 * Get target
	 * @return string
	 */
	public function getTarget()
	{
		return $this->target;
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
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