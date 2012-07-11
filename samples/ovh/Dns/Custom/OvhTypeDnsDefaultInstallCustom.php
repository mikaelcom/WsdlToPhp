<?php
/**
 * Class file for OvhTypeDnsDefaultInstallCustom
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDnsDefaultInstallCustom
 * @date 02/07/2012
 */
class OvhTypeDnsDefaultInstallCustom extends OvhWsdlClass
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
	 * The subdomain
	 * @var string
	 */
	public $subdomain;
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
	 * The mxtype
	 * @var string
	 */
	public $mxtype;
	/**
	 * The mx
	 * @var string
	 */
	public $mx;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The minimized
	 * @var boolean
	 */
	public $minimized;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string subdomain
	 * @param string hostingtype
	 * @param string hosting
	 * @param string mxtype
	 * @param string mx
	 * @param string country
	 * @param boolean minimized
	 * @return OvhTypeDnsDefaultInstallCustom
	 */
	public function __construct($_session = null,$_domain = null,$_subdomain = null,$_hostingtype = null,$_hosting = null,$_mxtype = null,$_mx = null,$_country = null,$_minimized = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'subdomain'=>$_subdomain,'hostingtype'=>$_hostingtype,'hosting'=>$_hosting,'mxtype'=>$_mxtype,'mx'=>$_mx,'country'=>$_country,'minimized'=>$_minimized));
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
	 * Set mxtype
	 * @param string mxtype
	 * @return string
	 */
	public function setMxtype($_mxtype)
	{
		return ($this->mxtype = $_mxtype);
	}
	/**
	 * Get mxtype
	 * @return string
	 */
	public function getMxtype()
	{
		return $this->mxtype;
	}
	/**
	 * Set mx
	 * @param string mx
	 * @return string
	 */
	public function setMx($_mx)
	{
		return ($this->mx = $_mx);
	}
	/**
	 * Get mx
	 * @return string
	 */
	public function getMx()
	{
		return $this->mx;
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
	 * Set minimized
	 * @param boolean minimized
	 * @return boolean
	 */
	public function setMinimized($_minimized)
	{
		return ($this->minimized = $_minimized);
	}
	/**
	 * Get minimized
	 * @return boolean
	 */
	public function getMinimized()
	{
		return $this->minimized;
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