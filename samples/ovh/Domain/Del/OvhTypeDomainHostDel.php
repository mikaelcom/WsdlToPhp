<?php
/**
 * Class file for OvhTypeDomainHostDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainHostDel
 * @date 02/07/2012
 */
class OvhTypeDomainHostDel extends OvhWsdlClass
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
	 * The host
	 * @var string
	 */
	public $host;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string host
	 * @return OvhTypeDomainHostDel
	 */
	public function __construct($_session = null,$_domain = null,$_host = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'host'=>$_host));
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
	 * Set host
	 * @param string host
	 * @return string
	 */
	public function setHost($_host)
	{
		return ($this->host = $_host);
	}
	/**
	 * Get host
	 * @return string
	 */
	public function getHost()
	{
		return $this->host;
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