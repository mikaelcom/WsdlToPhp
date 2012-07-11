<?php
/**
 * Class file for OvhTypeRedirectedEmailModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRedirectedEmailModify
 * @date 02/07/2012
 */
class OvhTypeRedirectedEmailModify extends OvhWsdlClass
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
	 * The redirected
	 * @var string
	 */
	public $redirected;
	/**
	 * The old_target
	 * @var string
	 */
	public $old_target;
	/**
	 * The target
	 * @var string
	 */
	public $target;
	/**
	 * The subdomain
	 * @var string
	 */
	public $subdomain;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string redirected
	 * @param string old_target
	 * @param string target
	 * @param string subdomain
	 * @return OvhTypeRedirectedEmailModify
	 */
	public function __construct($_session = null,$_domain = null,$_redirected = null,$_old_target = null,$_target = null,$_subdomain = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'redirected'=>$_redirected,'old_target'=>$_old_target,'target'=>$_target,'subdomain'=>$_subdomain));
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
	 * Set redirected
	 * @param string redirected
	 * @return string
	 */
	public function setRedirected($_redirected)
	{
		return ($this->redirected = $_redirected);
	}
	/**
	 * Get redirected
	 * @return string
	 */
	public function getRedirected()
	{
		return $this->redirected;
	}
	/**
	 * Set old_target
	 * @param string old_target
	 * @return string
	 */
	public function setOld_target($_old_target)
	{
		return ($this->old_target = $_old_target);
	}
	/**
	 * Get old_target
	 * @return string
	 */
	public function getOld_target()
	{
		return $this->old_target;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>