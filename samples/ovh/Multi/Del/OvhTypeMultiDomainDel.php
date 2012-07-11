<?php
/**
 * Class file for OvhTypeMultiDomainDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMultiDomainDel
 * @date 02/07/2012
 */
class OvhTypeMultiDomainDel extends OvhWsdlClass
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
	 * The multidomain
	 * @var string
	 */
	public $multidomain;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string multidomain
	 * @return OvhTypeMultiDomainDel
	 */
	public function __construct($_session = null,$_domain = null,$_multidomain = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'multidomain'=>$_multidomain));
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
	 * Set multidomain
	 * @param string multidomain
	 * @return string
	 */
	public function setMultidomain($_multidomain)
	{
		return ($this->multidomain = $_multidomain);
	}
	/**
	 * Get multidomain
	 * @return string
	 */
	public function getMultidomain()
	{
		return $this->multidomain;
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