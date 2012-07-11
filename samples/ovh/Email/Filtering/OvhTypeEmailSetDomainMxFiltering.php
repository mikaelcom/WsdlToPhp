<?php
/**
 * Class file for OvhTypeEmailSetDomainMxFiltering
 * @date 02/07/2012
 */
/**
 * Class OvhTypeEmailSetDomainMxFiltering
 * @date 02/07/2012
 */
class OvhTypeEmailSetDomainMxFiltering extends OvhWsdlClass
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
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The mx
	 * @var string
	 */
	public $mx;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string subdomain
	 * @param string type
	 * @param string mx
	 * @return OvhTypeEmailSetDomainMxFiltering
	 */
	public function __construct($_session = null,$_domain = null,$_subdomain = null,$_type = null,$_mx = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'subdomain'=>$_subdomain,'type'=>$_type,'mx'=>$_mx));
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
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>